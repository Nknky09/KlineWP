<?php get_header(); 
pageBanner();?>


    
     <div class="section-background section-modern reveal">
          <div class="container section-content section-glass">
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

    
<?php get_footer(); ?>
