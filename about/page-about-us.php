<?php get_header(); 
/*
Template Name: About Page Template
*/
?>

<main>
    
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
        </main>
    
<?php get_footer(); ?>