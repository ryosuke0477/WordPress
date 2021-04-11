<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="" <?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="header__img">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/estramedia__logo.png" alt=""></a>
    </div>
    <div id="menu" class="header__menu">
      <ul>
        <li><a href="<?php echo get_category_link(10); ?>">HTML</a></li>
        <li><a href="<?php echo get_category_link(11); ?>">CSS</a></li>
        <li><a href="<?php echo get_category_link(12); ?>">JavaScript</a></li>
        <li><a href="<?php echo get_category_link(13); ?>">PHP</a></li>
        <li><a href="<?php echo get_category_link(14); ?>">MySQL</a></li>
      </ul>
    </div>
  </header>