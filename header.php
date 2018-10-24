<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?> 
    
    </head>

<body <?php body_class(); ?>>

    <div class="container"> <!-- container -->

    <?php if( get_the_ID() != 75) {?>
      <div class="page-banner">
        <div class="page-banner__content container container--narrow">
          <h1 class="page-banner__title">
          <?php if(is_category()) {
            echo 'Posts under ';
            single_cat_title();
            echo ' category';
          } 
          elseif(is_author()){
            echo 'Posts by '; the_author();
          }
          else{
          wp_title(''); 
          } ?></h1>
        </div>  
      </div>

              <header class="site-header">
    <div class="container">
    <a href="<?php echo site_url(); ?>"> <h1 class="animalcrossing-logo-text float-left"><img src="<?php echo get_theme_file_uri('/images/isabelle-logo.png')?>" width="50" height="50"><?php bloginfo('name'); ?></a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <?php 
          wp_nav_menu(array(
            'theme_location' => 'headerNavLocation'
          )); ?>
          <!-- <ul>
            <li><a href="<?php echo site_url('/animal-crossing') ?>">Animal Crossing</a></li>
            <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
          </ul> -->
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
    <?php } 
    
    else { ?>
        <!-- site-header -->
        <header class="site-header">
    <div class="container">
    <a href="<?php echo site_url(); ?>"> <h1 class="animalcrossing-logo-text float-left"><img src="<?php echo get_theme_file_uri('/images/isabelle-logo.png')?>" width="50" height="50"><?php bloginfo('name'); ?></a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">

        <?php 
          wp_nav_menu(array(
            'theme_location' => 'headerNavLocation'
          )); ?>
          <!-- <ul>
            <li><a href="<?php echo site_url('/animal-crossing') ?>">Animal Crossing</a></li>
            <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
          </ul> -->
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
    <?php } ?>
        <!-- main-posts -->
        <div class="main-posts">
        <!-- site-header -->