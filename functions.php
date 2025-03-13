<?php


function pageBanner($args = NULL) {

  if (!isset($args['title'])) {
    $args['title'] = get_the_title();
  }

  if (!isset($args['subtitle'])) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!isset($args['photo'])) {
    if (get_field('page_banner_background_image') AND !is_home() AND !is_archive() ) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('img/shaah-shahidh--subrrYxv8A-unsplash.jpg');
    }
  }
  ?>

    <div class="page-banner">
 
      <div class="page-banner__bg-image" style="background-image:url(<?php echo $args['photo']; ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      </div>
    </div>
    

<?php
}



function kline_files() {
  wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyBzqVkPiLgOIHI0j8U_MXQ8Fi4RhsRhkac', NULL, '1.0', true);
  wp_enqueue_script('main-kline-js', get_theme_file_uri('/app.js'), '1.0', true);
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