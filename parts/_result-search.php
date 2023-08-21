<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:32:46+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _result-search.php
# @Last modified by:   user
# @Last modified time: 2018-01-26T16:53:58+07:00

// require_once ('../../../lib/contents/default.inc.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Perpustakaan</title>
    <link rel="stylesheet" href="<?php echo assets('css/ivaa.style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-1" id="sdkiri">
                <div class="marquee">
                  <div class="track">
                    <div class="content">&nbsp;INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA)</div>
                  </div>
                </div>
            </div>
        
        <div class="col-md-5 p">
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
              </a>
            <div class="h1">
            <h1 class="text-center p">PERPUSTAKAAN</h1>
           <div class="input-group-p mt-5">
                <!-- <form>
                 <input type="text" name="search" placeholder="CARI TERBITAN">
                </form> -->
                <?php echo include '_search-form.php'; ?>
            </div>
            </div>
            
            
            
        
        </div>

      <div class="col-md-6 p">
    
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.html">HOME</a>
                <a href="info_perpustakaan.html">INFO PERPUSTAKAAN</a>
                <a href="pustakawan.html">PUSTAKAWAN PICKS</a>
                <a href="perpustakaan2.html">SOROTAN PUSTAKA</a>
                <a href="data_kawan_ivaa.html">DAFTAR KAWAN IVAA</a>
                <a href="area_anggota.html">AREA ANGGOTA</a>
                <a href="login-pustakawan.html">LOGIN PUSTAKAWAN</a>
                <a href="#">VISITOR / BUKU TAMU</a>
                <a href="onlinearchive.html">ONLINE ARCHIVE</a>
                <a></a>
                <a></a>
                <li id="inline" style="list-style-type: none;">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </li>
              </div>
            

    <!--     <table class="atas">
          <tr>
            <td>Ditemukan <b>2958</b> dari pencarian Anda melalui kata kunci: <u>seni</u></td>
            <td><span class="perpus" style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776; </span></td>
          </tr>
        </table> -->

        <p class="pt-3 ml-4 text-dark"><?php echo "Ditemukan <strong>$total_pages</strong> dari pencarian Anda melalui kata kunci: <strong><u>$keywords_info</strong></>"; ?></p>
        <span class="perpus" style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776; </span>
          
             <div class="wraper">
                  <?php
                  // catch empty list
                  if (trim(strip_tags($main_content)) === '') {
                    echo '<h2 class="text-danger">' . __('No Result') . '</h2><hr/><p class="text-danger">' . __('Please try again') . '</p>';
                  } else {
                    echo $main_content;
                  }
                  ?>
              </div>

          <div class="pb-3 d-flex justify-content-between">
            <div class="left">
              <span><?php echo "$page / $total_pages"; ?></span>
            </div>
            <div class="right">
              <span>Next</span>
              <a href="#"><svg xmlns="http://www.w3.org/2000/svg" color="black" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg></a>
            </div>
          </div>

            <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>
            
      </div>
    </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
