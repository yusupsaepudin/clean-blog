<?php get_header(); ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'posts_per_page' => 7,
              'paged'          => $paged
            );
            $the_query = new WP_Query( $args );
          ?>

          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <?php the_title(); ?>
                </h2>
              </a>
              <p class="post-meta">Posted by
                <a href="#"><?php the_author(); ?></a>
                on <?php the_date(); ?></p>
            </div>
            <hr>

            <!-- Pager -->
            <div class="clearfix">
              <?php previous_posts_link( '&larr; Newer Posts', $the_query->max_num_pages) ?>
              <?php next_posts_link( 'Older Posts &rarr;', $the_query->max_num_pages) ?>
            </div>

          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div>
      </div>
    </div>

<?php get_footer(); ?>
