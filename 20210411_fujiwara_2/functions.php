<?php 

register_nav_menu( 'header-nav', ' ヘッダーナビゲーション ' );

add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');



?>