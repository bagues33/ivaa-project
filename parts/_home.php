<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:27:04+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _home.php
# @Last modified by:   user
# @Last modified time: 2018-01-26T18:43:45+07:00

?>

<!-- <section id="section1 container-fluid"> -->
    <!-- <header class="c-header"> -->
        <!-- <div class="mask"></div> -->
      <?php
      // ------------------------------------------------------------------------
      // include navbar
      // ------------------------------------------------------------------------
      // include '_navbar.php'; ?>
    <!-- </header> -->
  <?php
  // --------------------------------------------------------------------------
  // include search form part
  // --------------------------------------------------------------------------
  // include '_search-form.php'; ?>
<!-- </section> -->

<!-- <div id="slims-home">
<section class="mt-5 container">
    <h4 class="text-secondary text-center text-thin mt-5 mb-4"><?php echo __('Select the topic you are interested in'); ?></h4>
    <ul class="topic d-flex flex-wrap justify-content-center px-0">
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=8&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/8-books.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Literature'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=3&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/3-diploma.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Social Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/6-blackboard.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Applied Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/7-quill.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Art & Recreation'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="javascript:void(0)" class="d-flex flex-column" data-toggle="modal" data-target="#exampleModal">
                <img src="<?php echo assets('images/icon/grid_icon.png'); ?>" width="80"
                     class="mb-3 mx-auto"/>
                <?php echo __('see more..'); ?>
            </a>
        </li>
    </ul>
</section> -->
<!-- 
<?php if ($sysconf['template']['classic_popular_collection']) : ?>
<section class="mt-5 container">
    <h4 class=" mb-4">
        <?php echo __('Popular among our collections'); ?>
        <br>
        <small class="subtitle-section"><?php echo __('Our library\'s line of collection that have been favoured by our users were shown here. Look for them. Borrow them. Hope you also like them');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/popular"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/popular"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_new_collection']) : ?>
<section class="mt-5 container">
    <h4 class=" mb-4">
        <?php echo __('New collections + updated');?>
        <br>
        <small class="subtitle-section"><?php echo __('These are new collections list. Hope you like them. Maybe not all of them are new. But in term of time, we make sure that these are fresh from our processing oven');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/latest"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/latest"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_top_reader']) : ?>
<section class="mt-5 bg-white">
    <div class="container py-5">
        <h4 class="mb-4">
            <?php echo __('Top reader of the year');?>
            <br>
            <small class="subtitle-section"><?php echo __('Our best users, readers, so far. Continue to read if you want your name being mentioned here');?></small>
        </h4>
        <slims-group-member url="index.php?p=api/member/top"></slims-group-member>
    </div>
</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_map']) : ?>
<section class="my-5 container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <iframe class="embed-responsive"
                    src="<?= $sysconf['template']['classic_map_link']; ?>"
                    height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 pt-8 md:pt-0">
            <h4><?= $sysconf['library_name']; ?></h4>
            <p><?= $sysconf['template']['classic_map_desc']; ?></p>
            <p class="d-flex flex-row pt-2">
                <a target="_blank" href="<?= $sysconf['template']['classic_fb_link'] ?>" class="btn btn-primary mr-2" name="button"><i class="fab fa-facebook-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_twitter_link'] ?>" class="btn btn-info mr-2" name="button"><i class="fab fa-twitter-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_youtube_link'] ?>" class="btn btn-danger mr-2" name="button"><i class="fab fa-youtube text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_instagram_link'] ?>" class="btn btn-dark mr-2" name="button"><i class="fab fa-instagram text-white"></i></a>
            </p>
        </div>
    </div>
</section>
<?php endif; ?>
</div>
 -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
    <link rel="stylesheet" href="<?php echo assets('css/ivaa.style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container-fluid home">
    <div class="row">
            <div class="col-md-1" id="sdkiri">
                <div class="marquee">
                  <div class="track">
                    <div class="content">&nbsp;INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA) INDONESIAN VISUAL ART ARCHIVE (IVAA)</div>
                  </div>
                </div>
            </div>
        
        <div class="col-md-5">
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
             </a>
         <!--    <div class="h1">
                <h1 class="text-center">PERPUSTAKAAN</h1>
                <div class="input-group justify-content-center">
                    <form>
                     <input class="text-center home" type="text" name="search" placeholder="CARI TERBITAN">
                    </form>
                </div>
            </div> -->
            <div class="h1">
                
                <h1 class="text-center ip">INFO<br>PERPUSTAKAAN</h1>
                <div class="input-group-ip">
                   <!--  <form>
                     <input type="text" name="search" placeholder="CARI TERBITAN">
                    </form> -->
                    <?php include '_search-form.php'; ?>
                </div>
            </div>
            
            
            <footer>
                <div class="row m-0">
                    <div class="col-sm-12" id="atas">
                    <p>LIBRARIAN PICKS</p>
                    </div>
                </div>
            <!-- <div class="row m-0 d-flex flex-nowrap" id="gambar">
                <div class="col-3">
                    <img src="Asset/image/gambar1.jpg" alt="gambar1">
                </div>
                <div class="col-3">
                    <img src="Asset/image/gambar2.jpg" alt="gambar2">
                </div>
                <div class="col-3">
                    <img src="Asset/image/gambar3.jpg" alt="gambar3">
                </div>
                <div class="col-3">
                    <img src="Asset/image/gambar4.jpg" alt="gambar4">
                </div>
                <div class="col-3">
                    <img src="Asset/image/gambar4.jpg" alt="gambar4">
                </div>
            </div> -->
            <div id="slims-home">
                 <?php if ($sysconf['template']['classic_popular_collection']) : ?>
                    <slims-collection url="index.php?p=api/biblio/popular"></slims-collection>
                <?php endif; ?>
            </div>
           
                <div class="row m-0">
                    <div class="col-sm-12 text-center"><p class="py-3">INDONESIAN VISUAL ART ARCHIVE (IVAA)<br>
                    Jln. Ireda Gang Hiperkes, Dipowinatan 188 A/B
                    RT. 14, RW. 03 Keparakan, Mergangsan - Yogyakarta 55152
                    Telp./ Fax.: +62 274 375262 Email: program@ivaa-online.org</p></div>
                </div>
            </footer>
        
        </div>

<div class="col-md-6 bg-secondary">
    
             <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">HOME</a>
        <a href="info_perpustakaan.html">INFO PERPUSTAKAAN</a>
        <a href="pustakawan.html">PUSTAKAWAN PICKS</a>
        <a href="perpustakaan2.html">SOROTAN PUSTAKA</a>
        <a href="data_kawan_ivaa.php">DAFTAR KAWAN IVAA</a>
        <a href="index.php?p=member">AREA ANGGOTA</a>
        <a href="index.php?p=login">LOGIN PUSTAKAWAN</a>
        <a href="perpustakaan.html">VISITOR / BUKU TAMU</a>
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

       

    <div class="h-50 row" id="kolomatas-h">

      <div class="w-100 content-video">
        <span class="home" style="font-size:35px; cursor:pointer" onclick="openNav()">&#9776; </span>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HnJo_mS03Pw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
      </div>
        
    </div>

    <div class="row" id="kolombawah">
        <div class="text-center col-md-6" id="kiri">
          
              <!-- <div class="h2">
                <a href="#"><p>INFO<br>PERPUSTAKAAN</p></a>
              </div> -->
               <a href="#"><h5>INFO<br>PERPUSTAKAAN</h5></a>
              <div class="skewedr"></div>
            
        </div>
        <div class="text-center col-md-6" id="kanan">
            <a href="#"><h5>REVIEW BUKU/<br>SOROTAN PUSTAKA</h5></a>
        </div>
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