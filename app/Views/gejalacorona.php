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
      <title>Gejala Covid-19</title>
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
                                    <h1>Data Covid-19<br>Application</h1>
                                    <a class="read_more" href="<?= base_url('home/index2') ?>" ><b>Click Here!</b></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <!-- second slide -->
                   <div class="carousel-item">
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

      <div class="coronata">
         <div class="container">
            <div class="row d_flex grid">
               <div class="col-md-12">
                  <center>
                  <h1 style="font-size: 60px"><b>BAGAIMANA GEJALANYA?</b></h1>
                  <br>
                  <div class="coronata_img text_align_center">
                     <figure><img src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Symptoms_of_coronavirus_disease_2019_2.0-id.png" alt="#"/></figure>
                  </div>
               </div>
            </center>
               <div class="col-md-12 oder1">
                  <div class="titlepage text_align_left">
                     <p style="text-align: justify; font-size: 22px">Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian besar orang yang terpapar virus ini akan mengalami gejala ringan hingga sedang dan akan pulih tanpa perlu dirawat di rumah sakit. Virus corona bisa menimbulkan beragam gejala pada pengidapnya. Gejala yang muncul ini bergantung pada jenis virus corona yang menyerang, dan seberapa serius infeksi yang terjadi. Berikut beberapa gejala virus corona yang terbilang ringan:
                     <br>1. Hidung beringus.
                     <br>2. Sakit kepala.
                     <br>3. Batuk.
                     <br>4. Sakit tenggorokan.
                     <br>5. Demam.
                     <br>6. Merasa tidak enak badan.
                     <br>
                     Hal yang perlu ditegaskan, beberapa virus corona dapat menyebabkan gejala yang parah. Infeksinya dapat berubah menjadi bronkitis dan pneumonia (disebabkan oleh COVID-19), yang mengakibatkan gejala seperti demam yang mungkin cukup tinggi bila pasien mengidap pneumonia, batuk dengan lendir, sesak napas, nyeri dada atau sesak saat bernapas dan batuk, dan infeksi bisa semakin parah bila menyerang kelompok individu tertentu. Contohnya yaitu orang dengan penyakit jantung atau paru-paru.
                     </p>
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
               <h3 style="color: white;"><b><i>“We must not only keep our hands clean, let us get ride of any thing that contaminate the body. The soul of spirit must be equally kept clean.”<br>(Lailah Gifty Akita)</b></i></h3></center>
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