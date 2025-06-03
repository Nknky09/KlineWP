<?php get_header();
pageBanner(); ?>

<main>
  <div class="section-background section-modern-notr">
    <div class="container section-content section-glass">
      <?php 
        while ( have_posts() ) {
          the_post();
          the_content();
        }
      ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>