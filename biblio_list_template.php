<?php
/**
 * Template for Biblio List
 * name of memberID text field must be: memberID
 * name of institution text field must be: institution
 *
 * Copyright (C) 2015 Arie Nugraha (dicarve@gmail.com)
 * Create by Eddy Subratha (eddy.subratha@slims.web.id)
 *
 * Slims 8 (Akasia)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */

$label_cache = array();
/**
 *
 * Format bibliographic item list for OPAC display
 *
 * @param   object $dbs
 * @param   array $biblio_detail
 * @param   int $n
 * @param   array $settings
 * @param   array $return_back
 *
 * @return string
 */
function biblio_list_format($dbs, $biblio_detail, $n, $settings = array(), &$return_back = array()) {
  global $label_cache, $sysconf;
  // init output var
  $output     = '';

  $title      = $biblio_detail['title'];
  $biblio_id  = $biblio_detail['biblio_id'];
  $detail_url = SWB.'index.php?p=show_detail&id='.$biblio_id.'&keywords='.$settings['keywords'];
  $cite_url   = SWB.'index.php?p=cite&id='.$biblio_id.'&keywords='.$settings['keywords'];
  // $title_link = '<a href="'.$detail_url.'" class="titleField" itemprop="name" property="name" title="'.__('View record detail description for this title').'">'.$title.'</a>';

  // image thumbnail
  $images_loc = 'images/docs/'.$biblio_detail['image'];
  $thumb_url = './lib/minigalnano/createthumb.php?filename='.urlencode($images_loc).'&width=120';

  // notes
  $notes = getNotes($dbs, $biblio_id);
  $custom_field = '';
  $i = 0;
  $expand = true;
  if ($settings['enable_custom_frontpage'] AND $settings['custom_fields']) {
    $custom_field = '<dl class="row text-sm">';
    foreach ($settings['custom_fields'] as $field => $field_opts) {
      if ($field_opts[0] == 1) {
        $custom_field .= '<dt class="col-sm-3">'.$field_opts[1].'</dt><dd class="col-sm-9">'.(trim($biblio_detail[$field]) !== '' ? $biblio_detail[$field] : '-').'</dd>';
        $i++;
      }
    }
    $custom_field .= '</dl>';
  }
  if (empty($notes)) {
    $notes = $custom_field;
    $expand = false;
  }

  // availability
  $availability = getAvailability($dbs, $biblio_id);
  $class_avail = ($availability > 0) ? '' : 'text-danger';

  // authors
  $_authors = isset($biblio_detail['author'])?$biblio_detail['author']:biblio_list_model::getAuthors($dbs, $biblio_id, true);
  $_authors_string = '';
  if ($_authors) {
    if (!is_array($_authors)) {
      $_authors = explode('-', $_authors);
    }
    foreach ($_authors as $a) {
      $a = trim($a);
      $_authors_string .= ' <a href="index.php?author='.urlencode($a).'&search=Search" itemprop="name" property="name" class="text-dark text-decoration-none">'.$a.'</a>';
    }
  }

  

  $output .= '<table class="table table-borderless">';
  $output .= '<tr>';
  $output .= '<td rowspan="4" class="w-25 text-center"><img class="text-center" src="'.$thumb_url.'" width="90px"></td>';
  $output .= '</tr>';
  $output .= '<tr>';
  $output .= '<td class="header">';
  $output .= '<p style="text-decoration: none; font-size: 1.2rem;"><a title="'.__('View record detail description for this title').'" class="text-decoration-none card-link text-dark" href="'.$detail_url.'">'.addEllipsis($title, 50).'</a></p>';
  $output .= '</td>';
  $output .= '</tr>';
  $output .= '<tr>';
  $output .= '<td>';
  $output .= '<p style="width: 150px; height: 48px; overflow: hidden;">'.$_authors_string.'</p>';
  $output .= '</td>';
  $output .= '</tr>';
  $output .= '<tr>';
  $output .= '<td class="bawah">';
  $output .= '<p><b><a href="'.$detail_url.'">Read More</a></b></p>';
  $output .= '</td>';
  $output .= '</tr>';
  $output .= '</table>';
        


  // debug
  // $output .= '<code>'.json_encode($biblio_detail).'</code>';

  return $output;
}

function getNotes($dbs, $biblio_id)
{
  $query = $dbs->query('SELECT notes FROM biblio WHERE biblio_id = ' . $biblio_id);
  $data = $query->fetch_row();
  return addEllipsis($data[0], 200);
}

function addEllipsis($string, $length, $end='…')
{
    if (strlen($string) > $length)
    {
        $length -= strlen($end);
        $string  = substr($string, 0, $length);
        $string .= $end;
    }

    return $string;
}

function getAvailability($dbs, $biblio_id)
{
  // get total number of this biblio items/copies
  $_item_q = $dbs->query('SELECT COUNT(*) FROM item WHERE biblio_id='.$biblio_id);
  $_item_c = $_item_q->fetch_row();
  // get total number of currently borrowed copies
  $_borrowed_q = $dbs->query('SELECT COUNT(*) FROM loan AS l INNER JOIN item AS i'
    .' ON l.item_code=i.item_code WHERE l.is_lent=1 AND l.is_return=0 AND i.biblio_id='.$biblio_id);
  $_borrowed_c = $_borrowed_q->fetch_row();
  // total available
  $_total_avail = $_item_c[0]-$_borrowed_c[0];

  return $_total_avail;
}
