<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Data Covid-19 Application</title>

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="icon" href="<?= base_url() ?>/templatecovido/images/virus.png"/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <style>       
        .loader_bg {
     position: fixed;
     z-index: 9999999;
     background: #fff;
     width: 100%;
     height: 100%;
    }
    .loader {
         height: 100%;
         width: 100%;
         position: absolute;
         left: 0;
         top: 0;
         display: flex;
         justify-content: center;
         align-items: center;
    }

    .loader img {
         width: 600px;
    }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="loader_bg">
         <div class="loader"><img src="<?= base_url() ?>/templatecovido/images/loading6.gif" alt="#"/></div>
      </div>