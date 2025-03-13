<?php get_header(); 
pageBanner();?>

<div class="content-news">
       
        <div class="container-news">
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
