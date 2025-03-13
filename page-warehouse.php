<?php get_header(); 
pageBanner();?>

<content>
    
<div class="content-services-sub">
       
       <div class="container-services-sub">
            <?php
            // Start the loop
            while ( have_posts() ) {
                the_post();
                
                // Display the content of the page
                the_content();
            }
            ?>
        </div>
    </div>
        </content>
    
<?php get_footer(); ?>