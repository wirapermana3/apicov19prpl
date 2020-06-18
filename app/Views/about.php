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
      <title>About APICOV19</title>
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
      <style>
         body{
            background-color: lightgreen;
         }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?= base_url() ?>/templatecovido/images/loading2.gif" alt="#"/></div>
      </div>
      <!-- end loader -->

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
                              <li><a class="active" href="<?= base_url('home/about') ?>"><b>Tentang</b></a></li>
                              <li><a href="https://kitabisa.com/"><b>Donasi</b></a></li>                 
                              <li><a href="<?= base_url(); ?>"><b>Homepage</b></a></li>
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

      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2><b>About Application</b></h2>
                     <p style="text-align: justify;"><b>APICOV19 merupakan Aplikasi Informasi berbasis web tentang Virus Covid-19 yang bisa menampilkan Data Covid-19 secara Global dan juga Nasional. Selain itu fitur lainnya adalah adanya Edukasi tentang Covid-19. <br>Aplikasi ini dibuat dalam rangka untuk memenuhi Tugas Besar Mata Kuliah Praktikum Rekayasa Perangkat Lunak semester IV (4) di Informatika UIN Sunan Gunung Djati Bandung. <br>
                     Nama Pembuat : Satya Wira Permana <br>
                     Alamat : Bandung Barat</b>
                     </p>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="<?= base_url() ?>/templatecovido/images/covid.jpeg" alt="#"/></figure>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end about -->
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