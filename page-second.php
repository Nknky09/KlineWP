<?php get_header(); ?>

<content>
        <div class="content-banner-two">
          <img class="bg-image" src="<?php echo get_template_directory_uri(); ?>/img/Untitled2.png"/>
           <div class="home-logo">
            <img class="bg-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
          </div>
        </div>
        <div class="background-about-front">
          <div class="content-about-front">
            <div class="container-about-front">
              <h1>About &nbsp;&nbsp;"K" Line Logistics</h1>
              <div class="title-line"></div>
              <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>


              <div class="icon-home">
                  <img class="icon-home-img icon-one" src="<?php echo get_template_directory_uri(); ?>/img/ph--airplane-takeoff-light.png"/>
                  <img class="icon-home-img icon-two" src="<?php echo get_template_directory_uri(); ?>/img/fluent--vehicle-ship-20-regular.png"/>
                  <img class="icon-home-img icon-three" src="<?php echo get_template_directory_uri(); ?>/img/mdi-light--truck.png"/>
              </div>
              <br>
              
              <a href="#services"
                ><img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?>/img/Slide Up.png"
              /></a>
            </div>
          </div>
        </div>
        
        <div class="background-services">
        
        <div class="content-services">
        <h1>Services</h1>
        <div class="title-line"></div>
          <div class="container-services">
            
          
            <div class="card top-left">
                <div class="image-container">
                  <a href="#"><img
                      class="column-img" src="<?php echo get_template_directory_uri(); ?>/img/patrick-campanale-oCsQLKENz34-unsplash (1).jpg"/>
                      <span class="column-title"><p>Air Cargo</p></span></a>
                      </div>
                  <div class="column-bottom">
                    <a href="#services" class="column-arrow-icon"
                      ><img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" />
                      <p>Air Cargo</p></a>
                  </div>
                </div>

        <div class="card top-right">
         <div class="image-container">
            <a href="#"><img class="column-img" src="<?php echo get_template_directory_uri(); ?>/img/services-ocean.jpg" />
                <span class="column-title"><p>Ocean Cargo</p></span></a>
                </div>
                  <div class="column-bottom">
                    <a href="#services" class="column-arrow-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" />
                      <p>Ocean Cargo</p></a>
                  </div>
              </div>
              <div class="card bottom-left">
                <div class="image-container">
                  <a href="#"><img
                      class="column-img" src="<?php echo get_template_directory_uri(); ?>/img/services-warehouse.jpg"/>
                      <span class="column-title"><p>Warehouse</p></span></a>
                      </div>
                  <div class="column-bottom">
                    <a href="#services" class="column-arrow-icon"
                      ><img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" />
                      <p>Warehouse</p></a>
                  </div>
                </div>

            <div class="card bottom-right">
                <div class="image-container">
                  <a href="#"
                    ><img class="column-img" src="<?php echo get_template_directory_uri(); ?>/img/services-custom.jpg" />
                    <span class="column-title"><p>Customs Clearance</p></span></a
                  >
                
                  </div>

                  <div class="column-bottom">
                    <a href="#services" class="column-arrow-icon"
                      ><img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" />
                      <p>Customs</p></a
                    >
                  </div>
              </div>
          </div>
        </div>
        </div>
        
        <div class="content-banner2"></div>
       
          <div class="content-locations" id="map-container">
          <h1>Locations</h1>
          <div class="title-line"></div>
            <div class="container-locations">

              <div class="map-wrapper">
                <div id="map" class="map-container">
                  <aside class="sidebar-map">
                    <ul class="store-list">

                    </ul>
                  </aside>
                </div>
              </div>
          
          </div>
        </div>
        <div class="background-contact">
          <div class="content-contact">
          
            <h2 class="font-contact-title">Contact</h2>   
            <div class="title-line"></div>
              
            <div class="container-contact-front">
              <?php echo do_shortcode('[wpforms id="164"]'); ?>
              
            </div>
          </div>
        </div>
      </content>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzqVkPiLgOIHI0j8U_MXQ8Fi4RhsRhkac&callback=initMap"></script>


<?php get_footer();?>