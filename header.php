<!--
Hi, Thanks for checking out the source. The theme for this site was made primarily by George Witteman (www.georgewitteman.me).
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">

<?php wp_head(); ?>
<?php echo get_theme_mod( 'analytics_code', '' ); ?>

</head>
<body <?php body_class(); ?>>
<div class="site-container">
<div id="page-overlay" class="page-overlay"></div>
  <!-- Site header -->
  <header class="site-header">

    <div class="header-container">
      <!-- The Miscellany News logo -->
      <h1 class="site-name">
        <a class="site-title" href="<?php echo esc_url( home_url( '/' ) );?>">
          <span class="screen-reader-text">The Miscellany News</span>
          <img src="<?php echo get_template_directory_uri() . '/img/logo-white.svg'?>" class="site-logo" alt="The Misellany News Logo" width="738" height="81">
        </a>
      </h1>
      <p class="site-subheading">
        <?php echo get_theme_mod( 'site_subheading', 'Vassar College\'s student newspaper of record since 1866' ); ?>
      </p>
      <a href="#footer-search-form" id="header-search-show" class="head-search-button"></a>
    </div>

    <div class="header-search-form">
      <?php get_search_form(); ?>
    </div>

    <nav class="hn">
      <div class="hn-container">
        <a href="#footer-navigation" class="hn-mobile-show" id="hn-mobile-show">Menu</a>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'site-navigation',
          'container' => '',
          'menu_class' => 'hn-menu',
          'menu_id' => 'hn-menu'
        ));
        ?>
      </div>
    </nav>
  </header>

<div class="content-container">
