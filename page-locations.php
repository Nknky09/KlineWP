<?php get_header(); 
pageBanner();?>

<div class="container section-content content-locations reveal" id="map-container">
          <h1>USA Locations</h1>
          <div class="title-line"></div>
            <div class="container-locations">
              <div id="map"></div>
              <div class="sidebar-map"> 
                <input type="text" id="map-location-search" class="map-location-search" placeholder="Search by City, State, Zip">
                  <div class="sidebar-map-wrapper" id="sidebar-map-wrapper">
                  </div>
              </div>
          </div>
        </div>


    
<?php get_footer(); ?>
