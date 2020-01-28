<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/'); ?>fontawesome/css/all.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="<?= base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet">

        <!-- My CSS -->
        <link href="<?= base_url('assets/');?>css/style.css" rel="stylesheet">
        <link href="<?= base_url('assets/');?>css/style-kampus.css" rel="stylesheet">

        <!-- TomTom -->
        <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.37.2/maps/maps.css'/>
        <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.37.2/maps/maps-web.min.js'></script>
        
        <!-- AOS -->
        <link href="<?= base_url('assets/');?>aos-master/dist/aos.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/'); ?>img/km-assets/favicon.png" type="image/x-icon">

        <title><?= $title;?></title>
    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url();?>">
            <img src="<?= base_url();?>assets/img/logo/kampusmana-logo.png" alt="Logo Kampusmana" class="logo-km">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="custom-toggler navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?= base_url();?>">Home</a>
                <a class="nav-item nav-link active" href="<?= base_url();?>about">About</a>
                <a class="nav-item nav-link" href="<?= base_url();?>about/#temukan">Contact</a>
                <a class="nav-item nav-link" href="<?= base_url();?>#search">Search</a>
            </div>
            </div>
        </div>
    </nav>
    <!-- akhir Navbar -->