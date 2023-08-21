<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2019-01-30 00:58
 * @File name           : detail_template.php
 */

?>

     <div class="row">
       <div class="col-md-1 p2">
        <div class="vertikal-p2">
          &emsp;&nbsp;&nbsp;&nbsp;BIOGRAFI & MONOGRAFI (REFERENSI)&nbsp;&emsp;&emsp; 20-10009&emsp;&emsp;&emsp; 709 SIN D&emsp;&emsp; 2019 &emsp;
        </div>
         
       </div>
       <div class="col-md-11 book">
          
          <div class="row">
            <div class="d-flex justify-content-center col-md-3 pt-3">
               <!-- <img class="m-3" width="100px" src="Asset/image/foto.jpeg"> -->
               <?= $image; ?>
            </div>
             <div class="col-md-9">
               <h3 class="m-5 text-center"><?= $title; ?></h3>
            </div>
           <!--  <div class="tulisan">
              <h3>CERITA<br>SEBUAH RUANG</h3>
              <img src="Asset/image/foto.jpeg">
               <div class="box-p2">
                TERSEDIA
              </div>
              <p class="judul">Dolorosa Sinaga<br>Alexander Supartono<br>Sony Karsono</p>
              
              <p class="isi">Berpijak pada luasnya jangkauan kerja Dolorosa, buku ini menghadirkan dialektika panjang antara pengalaman hidup, kegelisahan politik, eksplorasi artistik, dan letup-letup inspirasi yang mewujud dalam lebih dari 600 karya Dolorosa Sinaga. Buku ini disusun dalam waktu yang panjang (hampir tiga tahun), karena ia tak hanya menampilkan karya-karya, tetapi juga menyingkapkan inspirasi yang memicu kelahiran mereka. Melalui komitmen dan kerja sama yang kuat, produksi buku Dolorosa Sinaga: Tubuh, Bentuk, Substansi kini rampung sudah<br><br>
              Buku ini hadir dalam lima bagian. Bagian Pertama, Pengantar Umum, menyajikan kolaborasi dua artikel yang memandu pembaca dalam menjelajahi “rimba” visual, tekstual, dan intelektual di jantung buku ini. Bagian Kedua, Biografi, menghidangkan “Hidup, Seni dan Politik
              </p>
              <div class="seri">
                EDISI<br>
                -<br><br>
                ISBN/ISSN<br>
                978-602.61716-4-1<br><br>
                SUBYEK<br>
                Seni Rupa Patung<br><br>
                KLASIFIKASI<br>
                709<br><br>
                JUDUL SERI<br>
                -<br><br>
                TERBITAN<br>
                JSS
              </div>
             
            </div> -->
            <!-- <span class="ip" style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776; </span> -->
            <section>
                <div class="h-100 skewedr-p2"></div>
            </section>

          </div>
          <div class="my-xl-5 my-lg-5 my-md-4 my-sm-2 row">
              <div class="d-flex justify-content-center align-items-center col-md-3">
                <span class="text-center border border-dark rounded-pill px-3 py-2"><?php echo ""; ?></span>
              </div>
              <div class="d-flex justify-content-center align-items-center col-md-9">
                 <p class="judul text-center"><?= str_replace("- Nama Orang", '', $authors); ?></p>
              </div>
          </div>
          <div class="row">
              <div style="font-size: 0.9em;" class="col-md-3">
                <p class="text-center">EDISI<br><?php echo ($edition) ? $edition : '-'; ?></p>
                <p class="text-center">ISBN/ISSN<br><?php echo ($isbn_issn) ? $isbn_issn : '-'; ?></p>
                <p class="text-center">SUBYEK<br><?php echo ($subjects) ? $subjects : '-'; ?></p>
                <p class="text-center">KLASIFIKASI<br><?php echo ($classification) ? $classification : '-'; ?></p>
                <p class="text-center">JUDUL SERI<br><?php echo ($series_title) ? $series_title : '-'; ?></p>
                <p class="text-center">TERBITAN<br><?php echo $publisher_name ?></p>
              </div>
              <div class="px-5 col-md-9">
                <p><?= $notes ? $notes : '<i>'.__('Description Not Available').'</i>'; ?></p>
              </div>
          </div>
       </div>
     </div>