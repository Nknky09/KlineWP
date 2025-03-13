<?php get_header(); 
pageBanner();?>

<content>
    
<div class="content-about-sub">
       
       <div class="container-about-sub">
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