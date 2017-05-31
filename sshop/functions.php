<?php
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );


 require_once( CORE . '/init.php' );

 if ( ! isset( $content_width ) ) {
     
        $content_width = 620;
   }
 if (! function_exists('sshop_theme_setup')) {
 	function sshop_theme_setup(){

 	}
 	add_action('init', sshop_theme_setup );
 }

 $language_folder = THEME_URL . '/languages';
 load_theme_textdomain( 'jonstark', $language_folder);

 add_theme_support( 'automatic-feed-links' );

 add_theme_support('title_tag');
 add_theme_support('post-formats', 
   array(
   	'image','video',
   	'gallery','quote','link'
   	)
  );
 $default_background = array(
   'default-color' => '#e8e8e8',
	);
 add_theme_support( 'custom-background', $default_background );

 register_nav_menu ( 'primary-menu', __('Primary Menu', 'jonstark') );

 $sidebar = array(
   'name' => __('Main Sidebar', 'jonstark'),
   'id' => 'main-sidebar',
   'description' => 'Main sidebar for Thachpham theme',
   'class' => 'main-sidebar',
   'before_title' => '<h3 class="widgettitle">',
   'after_title' => '</h3>'
);
register_sidebar( $sidebar );

if ( ! function_exists( 'thachpham_logo' ) ) {
  function jonstark_logo() {?>
    <div class="logo">
 
      <div class="site-name">
        <?php if ( is_home() ) {
          printf(
            '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } else {
          printf(
            '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } // endif ?>
      </div>
      <div class="site-description"><?php bloginfo( 'description' ); ?></div>
 
    </div>
  <?php }
}
?>