 HEAD
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <div class="logo">
      <a href="<?php echo home_url(); ?>">Novel Office</a>
    </div>

    <div class="menu-toggle" id="menu-toggle">&#9776;</div>

    <nav class="main-nav" id="main-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'nav-links'
        ));
      ?>
    </nav>
  </div>
</header>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <div class="logo">
      <a href="<?php echo home_url(); ?>">Novel Office</a>
    </div>

    <div class="menu-toggle" id="menu-toggle">&#9776;</div>

    <nav class="main-nav" id="main-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'nav-links'
        ));
      ?>
    </nav>
  </div>
</header>
 bbb609d61f4e9286b601dd2813fe8db47875214d
