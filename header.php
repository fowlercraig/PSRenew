<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class('gridlock'); ?>>
<div id="wrapper">

<header id="header" <?php body_class(); ?>>
  <nav class="row">
    <h1 class="mobile-logo desktop-12 desktop-hide max-hide"><a href="/"><?php bloginfo( 'name' ) ?></a></h1>
    <?php wp_nav_menu( array( 'theme_location'=>'main-menu','menu_class'=>'menu desktop-10 tablet-6 mobile-3','walker' => new MV_Cleaner_Walker_Nav_Menu() ) ); ?>
    <?php wp_nav_menu( array( 'theme_location'=>'socl-menu','menu_class'=>'menu mobile-hide tablet-hide text-right desktop-2','walker' => new MV_Cleaner_Walker_Nav_Menu() ) ); ?>
  </nav>
</header>

<section id="content"><div>
<div <?php body_class(); ?>>

