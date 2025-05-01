<?php get_header();
pageBanner(); ?>

<main>
  <div class="posts-margin" ></div>
<div class="container">
  <h1>News & Updates</h1>

  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article style="margin-bottom: 2rem;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile;

    the_posts_pagination();
  else :
    echo "<p>No posts found.</p>";
  endif;
  ?>
</div>

</main>

<?php get_footer(); ?>
