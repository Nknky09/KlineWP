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
  global $post;
  wp_enqueue_style('kline-index-style', get_theme_file_uri('/build/index.css'), array(), time());

  wp_enqueue_script('kline-app-js', get_theme_file_uri('/app.js'), array(), time(), true);

  $load_map = false;

  if (is_front_page() || is_home()) {
    $load_map = true;
  }

  $template_path = get_page_template();
  if ($template_path !== false && basename($template_path) === 'page-locations.php') {
    $load_map = true;
  }

  if (is_page('about-us') || (isset($post) && strpos($post->post_content, 'id="map"') !== false)) {
    $load_map = true;
  }

  if ($load_map) {
    wp_enqueue_style('map-style', get_theme_file_uri('/build/map.css'), array(), time());

    wp_enqueue_script('main-kline-js', get_theme_file_uri('/map.js'), array(), time(), true);
    
    add_action('wp_footer', function() {
      echo '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzqVkPiLgOIHI0j8U_MXQ8Fi4RhsRhkac&callback=initMap"></script>';
    }, 100);
    
  }
}

add_action('wp_enqueue_scripts', 'kline_files');

function kline_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_image_size('pageBanner', 1500, 350, true);
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