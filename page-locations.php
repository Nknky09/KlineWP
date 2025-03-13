<?php get_header(); 
pageBanner();?>


<div class="content-locations" id="map-container">
          <h1>Locations</h1>
            <div class="container-locations">
              <div id="map"></div>
              <div class="sidebar-map"> 
                <h3>K Line Logistics USA</h3>
                  <div class="sidebar-map-wrapper">
                  
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(0);" >New York</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(1);" >Los Angeles</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(2);" >Chicago</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(3);" >Atlanta</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(4);" >Dallas</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(5);" >San Fransisco</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(6);" >Seattle</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(7);" >McAllen</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(8);" >San Diego</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(9);" >Phoneix</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(10);" >Columbus</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(11);" >Lexington</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(12);" >Lincoln</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(13);" >Charlotte</a></span><br>
                    <span class="location-item"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo-icon.png"><a onclick="myClick(14);" >Huntsville</a></span><br>
                  </div>
              </div>
              <br/>
              <br/>
              <div class="global" style="height: 600px; width:auto; padding-top:100px;  ">

              </div>
              
          </div>
        </div>
<!-- 
        <content>
    
<div class="content-services-sub">
       
       <div class="container-services-sub">
            <?php
            while ( have_posts() ) {
                the_post();
                
                the_content();
            }
            ?>
        </div>
    </div>
        </content> -->

    
<?php get_footer(); ?>
