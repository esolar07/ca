<?

function candles_theme_styles(){
  wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
}
// adding css
add_action('wp_enqueue_scripts', 'candles_theme_styles');

function candles_theme_js(){
  wp_enqueue_script('modernizr_js', get_template_directory_uri() . "/js/modernizr.js", '', '', false);
  wp_enqueue_script('foundation_js', get_template_directory_uri() . "/js/foundation.js", array('jquery'), '', true);
  wp_enqueue_script('main_js', get_template_directory_uri() . "/js/app.js", array('jquery', 'foundation_js'), '', true);
}
// adding js
add_action('wp_enqeue_scripts', 'candles_themes_styles');

?>
