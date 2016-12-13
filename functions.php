<?

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
// ***** dev note ****
// may need to change post image size later
set_post_thumbnail_size( 850, 350);



function register_theme_menus(){
  register_nav_menus(
    array(
      'primary-menu' => _('Primary Menu'),
      'secondary-menu' => ('Secondary Menu')
    )
  );
}

add_action('init', 'register_theme_menus');

function candles_theme_styles(){
  wp_enqueue_style('foundation_css', 'https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css');
  wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');

}
// adding css
add_action('wp_enqueue_scripts', 'candles_theme_styles');

function candles_theme_js(){
  wp_enqueue_script('modernizr_js', get_template_directory_uri() . "/js/modernizr.js", '', '', false);
  wp_enqueue_script('foundation_js',get_template_directory_uri() . "/js/foundation.min.js", array('jquery'), '', true);
  wp_enqueue_script('main_js', get_template_directory_uri() . "/js/app.js", array('jquery', 'foundation_js'), '', true);
}
// adding js
add_action('wp_enqueue_scripts', 'candles_theme_js');

?>
