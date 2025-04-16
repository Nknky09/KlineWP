<?php


function pageBanner($args = NULL) {
  // Pull values from ACF fields
  $subtitle = get_field('page_banner_subtitle');
  $bgImage = get_field('page_banner_background_image');

  // Only render the banner if a background image is present
  if (is_array($bgImage) && isset($bgImage['url'])) {
    $bgImageURL = esc_url($bgImage['url']);
    ?>
    <div class="page-banner" style="background-image: url('<?php echo $bgImageURL; ?>')">
      <div class="page-banner__content container">
      </div>
    </div>
    <?php
  }
}


function kline_files() {
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyBzqVkPiLgOIHI0j8U_MXQ8Fi4RhsRhkac', array(), '1.0', true);
  wp_enqueue_script('main-kline-js', get_theme_file_uri('/map.js'), array(), time(), true);
    wp_enqueue_script('kline-app-js', get_theme_file_uri('/app.js'), array(), time(), true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('phosphor-icons', 'https://unpkg.com/@phosphor-icons/web');
  wp_enqueue_style('kline_main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'kline_files');

function kline_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_image_size('pageBanner', 1500, 300, true);
}

add_action('after_setup_theme', 'kline_features');

function klineMapKey($api) {
  $api['key'] = 'AIzaSyBzqVkPiLgOIHI0j8U_MXQ8Fi4RhsRhkac';
  return $api;
}

add_filter('acf/fields/google_map/api', 'klineMapKey');

function remove_admin_bar() {
   {
    show_admin_bar(false);
  }
}

add_action('after_setup_theme', 'remove_admin_bar');


?>