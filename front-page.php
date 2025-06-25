<?php get_header(); ?>


<content>
         <div class="content-banner-two reveal">
          <picture>
            <source type="image/webp" media="(max-width: 768px)" srcset="<?php echo site_url(); ?>/wp-content/uploads/2025/05/home-768.webp">
            <source type="image/webp" media="(max-width: 1024px)" srcset="<?php echo site_url(); ?>/wp-content/uploads/2025/05/home-1024.webp">
            <source type="image/webp" srcset="<?php echo site_url(); ?>/wp-content/uploads/2025/05/home-1920.webp" > 
            <img class="bg-image" 
            src="<?php echo site_url();?>/wp-content/uploads/2025/05/home-1024.webp"
            srcset="
              <?php echo site_url(); ?>/wp-content/uploads/2025/05/home-768.webp 768w,
              <?php echo site_url(); ?>/wp-content/uploads/2025/05/home-1024.webp 1024w,
              <?php echo site_url(); ?>/wp-content/uploads/2025/05/home-1920.webp 1920w
            "
            sizes="100vw"
            width="1920" height="990" decoding="async" fetchpriority="high" loading="eager" alt="Home page banner" />
          </picture>
           
        </div>
        <div class="section-background section-modern reveal">
          <div class="container section-content section-glass">
            <div class="container-about">
              <h1>About "K" Line Logistics</h1>

              <div class="title-line"></div>
              <p>
                “K” Line Logistics, a core subsidiary of Kawasaki Kisen Kaisha, Ltd. (K LINE)., 
                is a leading international logistics company including freight forwarding and 
                customs brokerage services with almost a half century of experience.  
              </p>
              <p>
                Since our beginning in Tokyo in 1960 our company has continued to grow with over 70 locations employing over 1,600 professionals worldwide. In addition to these offices, “K” Line Logistics has agencies in 70 other countries under partnership arrangements that assure full coverage throughout our global network.
              </p>
              <p>
                In the United States, “K” Line Logistics (USA), Inc. offers services from 14 offices strategically located in New York, Chicago, Columbus, Lexington, Atlanta, Charlotte, Dallas, McAllen (Texas), Seattle, San Francisco, Los Angeles, San Diego, Phoenix, and Lincoln.
                </p>

              <div class="icon-home">
                  <img class="icon-home-img icon-one" src="<?php echo get_template_directory_uri(); ?>/img/ph--airplane-takeoff-light.png" loading="lazy" decoding="async" alt="airplane icon" />
                  <img class="icon-home-img icon-two" src="<?php echo get_template_directory_uri(); ?>/img/fluent--vehicle-ship-20-regular.png" loading="lazy" decoding="async" alt="ship icon"/>
                  <img class="icon-home-img icon-three" src="<?php echo get_template_directory_uri(); ?>/img/mdi-light--truck.png" loading="lazy" decoding="async" alt="truck icon"/>
              </div>
              
              <div class="container-contact-front">
              <a href="/contact" class="elementor-contact-button">
                Contact Us
              </a>
              
            </div>
              
              <a href="#services"
                ><img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?>/img/Slide Up.png" loading="lazy" decoding="async"
              alt="arrow icon"/></a>
            </div>
          </div>
        </div>
        
        <div class="section-background section-modern reveal" id="services">
        
        <div class="container section-content section-glass">
        <h2>Services</h2>
        <div class="title-line"></div>
          <div class="grid-cols-2">
            <div class="card top-left">
              <div class="image-container">
                <a href="<?php echo site_url('/services/air-export') ?>"><img class="column-img" src="<?php echo get_template_directory_uri(); ?>/img/aircargo-home.jpg" loading="lazy" decoding="async" alt="air export services">
                </a>
              </div>
              <div class="column-bottom">
                <a href="#services" class="column-arrow-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" loading="lazy" decoding="async" alt="arrow icon"/>
                  <p>Air Cargo</p>
                </a>
              </div>
            </div>

            <div class="card top-right">
              <div class="image-container">
                <a href="<?php echo site_url('/services/ocean-export') ?>"><img class="column-img" src="<?php echo get_template_directory_uri(); ?>/img/services-ocean.jpg" loading="lazy" decoding="async" alt="ocean export services">
                </a>
              </div>
              <div class="column-bottom">
                <a href="<?php echo site_url('/services/warehouse') ?>" class="column-arrow-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" loading="lazy" decoding="async" alt="arrow icon"/>
                  <p>Ocean Cargo</p>
                </a>
              </div>
            </div>
            <div class="card bottom-left">
              <div class="image-container">
                <a href="#"><img class="column-img" src="<?php echo get_template_directory_uri(); ?>/img/warehouse-home.jpg" alt="warehouse services"/>
              </a>
              </div>
              <div class="column-bottom">
                <a href="<?php echo site_url('/services/customs') ?>" class="column-arrow-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" loading="lazy" decoding="async" alt="arrow icon"/>
                  <p>Warehouse</p>
                </a>
              </div>
            </div>
          
            <div class="card bottom-right">
              <div class="image-container">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/customs-home.jpg" alt="customs brokerage services"/>
                </a>
              </div>
              <div class="column-bottom">
                <a href="#services" class="column-arrow-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/Slide Side.png" loading="lazy" decoding="async" alt="arrow icon"/>
                  <p>Customs Clearance</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="content-banner2"></div>
       
         <div class="container section-content content-locations reveal" id="map-container">
         
          <h2>USA Locations</h2>
          <div class="title-line"></div>
            <div class="container-locations">
              
              <div class="sidebar-map"> 
                <input type="text" id="map-location-search" class="map-location-search" placeholder="Search by City, State, Zip">
                  <div class="sidebar-map-wrapper" id="sidebar-map-wrapper">
                  </div>
              </div>
              <div id="map"></div>
          </div>
        </div>
      </content>

<?php get_footer();?>