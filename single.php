<?php get_header(); ?>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>