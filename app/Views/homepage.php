<?php
  $data = file_get_contents('https://api.kawalcorona.com/indonesia/');
  $nasional = json_decode($data, true);
?>
<!DOCTYPE html>
<html lang="en">
   <head>

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>APICOV19</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= base_url() ?>/templatecovido/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?= base_url() ?>/templatecovido/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?= base_url() ?>/templatecovido/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?= base_url() ?>/templatecovido/images/virus.png"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?= base_url() ?>/templatecovido/images/loading2.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
                    <!-- header -->
         <header class="header-area">
            
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.html"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a href="<?= base_url('home/about') ?>"><b>Tentang</b></a></li>
                              <li><a href="https://kitabisa.com/"><b>Donasi</b></a></li>                 
                              <li><a class="active" href="<?= base_url(); ?>"><b>Homepage</b></a></li>
                              <li><a href="https://deskrelawanpb.bnpb.go.id/covid-19/"><b>Relawan</b></a></li>
                              <li><a href="<?= base_url('home/contact') ?>"><b>Contact</b></a></li>
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- end header -->
    <div class="full_bg">
      <!-- header inner -->
         <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
               <ol class="carousel-indicators ">
                  <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                  <li data-target="#banner1" data-slide-to="1" class="">02</li>
                  <li data-target="#banner1" data-slide-to="2" class="active">03</li>
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>APICOV19<br>Web Application</h1>
                                    <a class="btn btn-dark"><b>Aplikasi Informasi Covid-19</b></a>
                                       <a class="btn btn-primary" href="https://wirapermana3.blogspot.com"><b>Created By Satya Wira Permana</b></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> 
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="photog">
                                    <h1>Data Covid-19<br>Application</h1>
                                    <a class="read_more" href="<?= base_url('home/index2') ?>" ><b>Click Here!</b></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                   
                  <!-- third slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>About<br>Application</h1>
                                    <a class="read_more" href="<?= base_url('home/about') ?>" ><b>Click Here!</b></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2>Tentang Corona Virus</h2>
                     <p>Novel coronavirus (2019-nCoV) adalah jenis baru coronavirus yang belum pernah diidentifikasi sebelumnya pada manusia. Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan.
                     </p>
                     <a class="read_more" href="<?= base_url('home/aboutcoronavirus') ?>">Baca Selengkapnya</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="https://www.blopeur.com/assets/img/blog/covid.gif" alt="#"/></figure>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end about -->
     <!-- coronata -->
      <div class="coronata">
         <div class="container">
            <div class="row d_flex grid">
               <div class="col-md-7">
                  <div class="coronata_img text_align_center">
                     <figure><img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Symptoms_of_coronavirus_disease_2019_2.0-id.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 oder1">
                  <div class="titlepage text_align_left">
                     <h2>Bagaimana Gejalanya?</h2>
                     <p>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian besar orang yang terpapar virus ini akan mengalami gejala ringan hingga sedang dan akan pulih tanpa perlu dirawat di rumah sakit.
                     </p>
                     <a class="read_more" href="<?= base_url('home/gejalacorona') ?>">Baca Selengkapnya</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end coronata -->
   
        <!-- protect -->
      <div class="protect">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Bagaimana Pencegahan dan Perlindungan Diri dari Virus COVID-19 ini?</h2>
                     <p>Lindungi diri dan orang lain di sekitar Anda dengan mengetahui fakta-fakta terkait virus ini dan mengambil langkah pencegahan yang sesuai. Ikuti saran yang diberikan oleh badan kesehatan publik lokal Anda.
                     </p>
                  </div>
               </div>
            </div>
         </div>
           <div class="protect_bg">
         <div class="container">
             <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="<?= base_url() ?>/templatecovido/images/pro1.png" alt="#"/></i>
                           <h3>Memakai Masker</h3>
                           <span> Gunakan masker saat beraktivitas di tempat umum atau keramaian. Pakai masker dan sarung tangan bila berada di tempat umum atau sedang bersama orang lain. Gunakan tisu untuk menutup mulut dan hidung bila batuk atau bersin, lalu segera buang tisu ke tempat sampah.</span>
                          </div>
                        </div
>                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="<?= base_url() ?>/templatecovido/images/pro2.png" alt="#"/></i>
                           <h3>Cuci Tangan</h3>
                           <span> Rutin mencuci tangan dengan air dan sabun atau hand sanitizer yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum. Lakukan rutin mencuci tangan setelah beraktivitas dan jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan. </span>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="<?= base_url() ?>/templatecovido/images/pro3.png" alt="#"/></i>
                           <h3>Berdiam di Rumah #Dirumahaja</h3>
                           <span> Jangan keluar rumah, kecuali untuk mendapatkan pengobatan. Bila ingin ke rumah sakit saat gejala bertambah berat, sebaiknya hubungi dulu pihak rumah sakit untuk menjemput. Larang orang lain untuk mengunjungi atau menjenguk Anda sampai Anda benar-benar sembuh.</span>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="<?= base_url() ?>/templatecovido/images/physical.webp" alt="#"/></i>
                           <h3>Menerapkan Physical Distancing</h3>
                           <span> Terapkan physical distancing, yaitu menjaga jarak minimal 1 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak. Hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang yang sedang sakit demam, batuk, atau pilek.</span>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="<?= base_url() ?>/templatecovido/images/sehat.png" alt="#"/></i>
                           <h3>Menerapkan Pola Hidup Sehat</h3>
                           <span> Tingkatkan daya tahan tubuh dengan pola hidup sehat, seperti mengonsumsi makanan bergizi, berolahraga secara rutin, beristirahat yang cukup, dan mencegah stres.</span>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="<?= base_url() ?>/templatecovido/images/kebersihan.png" alt="#"/></i>
                           <h3>Jagalah Kebersihan</h3>
                           <span> Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk kebersihan rumah.</span>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </div>
         </div>
      </div>
      <!-- end protect -->
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Kasus Coronavirus (COVID-19) di Indonesia</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="<?= base_url() ?>/templatecovido/images/cases1.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Positif</h3>
                        <p style="font-size: 20px;">Jumlah atau Total Kasus Positif Covid-19 di Indonesia yaitu sebanyak <b><?= $nasional[0]['positif']; ?></b></p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="<?= base_url() ?>/templatecovido/images/cases3.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Sembuh</h3>
                        <p style="font-size: 20px;">Jumlah atau Total Sembuh dari Covid-19 di Indonesia yaitu sebanyak 
                        <b><?= $nasional[0]['sembuh']; ?></b></p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="<?= base_url() ?>/templatecovido/images/cases2.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Meninggal</h3>
                        <p style="font-size: 20px;">Jumlah atau Total Kasus Meninggal di Indonesia yaitu sebanyak <b ><?= $nasional[0]['meninggal']; ?></b></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->
      <div class="cases">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Bagaimana Diagnosis Virus COVID-19?</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                     <div class="reader text_align_center">
                        <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19.</p>
                     </div>
                  </div>
                  <div class=" col-md-4">
                     <div class="reader text_align_center">
                        <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:<br>
                        1. Rapid test untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi oleh tubuh untuk melawan virus Corona.<br>
                        2. Swab test atau tes PCR (polymerase chain reaction) untuk mendeteksi virus Corona di dalam dahak<br>
                        3. CT scan atau Rontgen dada untuk mendeteksi infiltrat atau cairan di paru-paru.</p>
                     </div>
                  </div>
                  <div class=" col-md-4">
                     <div class="reader text_align_center">
                        <p>Hasil rapid test COVID-19 positif kemungkinan besar menunjukkan bahwa Anda memang sudah terinfeksi virus Corona, namun bisa juga berarti Anda terinfeksi kuman atau virus yang lain. Sebaliknya, hasil rapid test COVID-19 negatif belum tentu menandakan bahwa Anda mutlak terbebas dari virus Corona.</p>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- end cases -->
      <div class="cases">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Komplikasi Virus Corona (COVID-19)</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-12">
                  <div class="reader text_align_center">
                     <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <div class="cases">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Pengobatan Virus Corona (COVID-19)</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-12">
                  <div class="reader text_align_center">
                     <p>Infeksi virus Corona atau COVID-19 belum bisa diobati, tetapi ada beberapa langkah yang dapat dilakukan dokter untuk meredakan gejalanya dan mencegah penyebaran virus, yaitu: <br>
                    1. Merujuk penderita COVID-19 yang berat untuk menjalani perawatan dan karatina di rumah sakit rujukan. <br>
                    2. Memberikan obat pereda demam dan nyeri yang aman dan sesuai kondisi penderita. <br>
                    3. Menganjurkan penderita COVID-19 untuk melakukan isolasi mandiri dan istirahat yang cukup. <br>
                    4. Menganjurkan penderita COVID-19 untuk banyak minum air putih untuk menjaga kadar cairan tubuh</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!-- update -->
<div class="update">
   <div class="cevery_bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
              <center>
               <h3 style="color: white;"><b><i>“While you are chilling at home during self-isolation with netflix or youtube, there are people across the world who have no clue how to make ends meet. So please, I beg you, each time you share this statement, make sure to donate some money, no matter how little, to those in need either personally or through a covid relief fund.”<br>(Abhijit Naskar)</b></i></h3></center>
            </div>
         </div>
      </div>
   </div>
</div>
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Feature</h3>
                              <ul class="menu_footer">
                                <li><a href="<?= base_url() ?>">Homepage</a><li>
                                 <li><a href="<?= base_url('home/about') ?>">Tentang</a><li>
                                 <li> <a href="https://kitabisa.com/">Donasi</a><li>
                                 <li> <a href="https://deskrelawanpb.bnpb.go.id/covid-19/">Relawan</a><li>
                                 <li><a href="<?= base_url('home/index2') ?>">Data Covid-19 App</a><li>
                                 <li><a href="<?= base_url('home/contact') ?>">Contact</a><li>
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>Reference</h3>
                              <a style="color: white;" href="https://www.alodokter.com/virus-corona">https://www.alodokter.com/virus-corona</a>
                              <a style="color: white;" href="https://www.halodoc.com/kesehatan/coronavirus">https://www.halodoc.com/kesehatan/<br>coronavirus</a>
                              <a style="color: white;" href="https://stoppneumonia.id/informasi-tentang-virus-corona-novel-coronavirus/">https://stoppneumonia.id/informasi-tentang-virus-corona-novel-coronavirus/</a>
                              <p>
                              <h3>Data API</h3>
                              <a href="https://kawalcorona.com/api/" style="color: white;">https://kawalcorona.com/api/</a>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Batujajar Barat, Bandung Barat, Jawa Barat, Indonesia, 40561.  
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +62 895379181040
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : wirapermana3@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>World Countries</h3>
                              <div class="map">
                                <img src="<?= base_url() ?>/templatecovido/images/map.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>Copyright © 2020. Created by Satya Wira Permana.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?= base_url() ?>/templatecovido/js/jquery.min.js"></script>
      <script src="<?= base_url() ?>/templatecovido/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="<?= base_url() ?>/templatecovido/js/owl.carousel.min.js"></script>
      <script src="<?= base_url() ?>/templatecovido/js/custom.js"></script>
   </body>
</html>