<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title><?= $website->name; ?></title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Yeseva One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin Sans" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/swiper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/imagenew/icon-url.png">
</head>

<body>

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="<?= base_url(); ?>"><img src="https://admin103.kalilashop.com/upload/<?= $website->image; ?>" alt="alternative" class="img-fluid"></a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk Populer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#set-hijab">Set Hijab & Mukena</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#katalog">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    $number = $website->phone;
    $n1 = substr($number, 0, 4);
    $n2 = substr($number, 4, 4);
    $n3 = substr($number, 8, 4);
    $wa = $n1 . '-' . $n2 . '-' . $n3;
    ?>
    <!-- Home -->
    <section class="home d-flex align-items-center" id="header">
        <div class="container" data-aos="fade-right">
            <img src="<?= base_url(); ?>assets/imagenew/hero-people.png" class="img-fluid bghero" alt="">

            <h1 class="headline font-yo"><?= $homeweb->title; ?></h1>
            <p class="para py-1"><?= $homeweb->deskripsi; ?></p>
            <div class="my-1">
                <a class="btn-wa" href="https://wa.wizard.id/fe0403" target="_blank"><i class="fa fa-whatsapp"></i><?= $wa; ?></a>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of home -->