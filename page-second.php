<?php get_header(); ?>

<content>
        <div class="content-banner-two reveal">
          <img class="bg-image" src="<?php echo get_template_directory_uri(); ?>/img/newbg1.jpg"/>
           <div class="home-logo2">
            <img class="bg-logo2" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
          </div>
        </div>
        <div class="background-about-front section-modern reveal">
          <div class="content-about-front section-glass">
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
        
        <div class="background-about-front section-modern reveal">
          <div class="content-about-front section-glass">
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
       
          <div class="content-locations section-modern reveal" id="map-container">
          <h1>USA Locations</h1>
          <div class="title-line"></div>
            <div class="container-locations">
              <div id="map"></div>
              <div class="sidebar-map"> 
                <input type="text" id="map-location-search" class="map-location-search" placeholder="Search Location">
                  <div class="sidebar-map-wrapper" id="sidebar-map-wrapper">
                  
                    
                  </div>
              </div>
          
          </div>
        </div>
        <div class="background-contact section-modern reveal">
          <div class="content-contact section-glass">
          
            <h2 class="font-contact-title">Contact</h2>   
            <div class="title-line"></div>
              
            <div class="container-contact-front">
              <?php echo do_shortcode('[wpforms id="164"]'); ?>
              
            </div>
          </div>
        </div>
      </content>

<?php get_footer();?>