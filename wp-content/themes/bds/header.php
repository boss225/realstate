<!doctype html>
<html <?php language_attributes(); ?> >

<head>

    <title>Real Estate</title>

    <meta name="viewport" content="width=device-width" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">

    <link rel="shortcut icon" href="favicon.ico">
    <?php wp_head(); ?>

</head>

<body>

<!-- TOP -->
<div class="top-bar">

    <p class="text">
        <a><i class="fa fa-map-marker"></i>05 Hoàng Hoa Thám, Phường 3, TP. Vũng Tàu</a>
        <a href="tel:+61383766284"><i class="fa fa-phone"></i> 0937109088</a>
    </p>

    <p class="social">
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-vimeo"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>
    </p>

</div>
<!-- TOP -->

<!-- HEADER -->
<header class="clearfix">

    <div class="logo">
        <a href="#"><img src="<?php echo THEME_URI_PATH ?>images/logo.png" alt="HATA">HATA</a>
    </div>
    <?php real_state_nav_menu('primary-menu'); ?>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</header>
<!-- HEADER -->