<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul> -->
            <?php
              $defaults = array(
                'menu'  => 'header-menu',
                'container' => 'ul',
                'theme_location' => 'primary-menu',
                'menu_class'  => 'navbar-nav ml-auto'
              );
              wp_nav_menu( $defaults );
            ?>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/images/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <?php if ( is_front_page() && is_home() ) { ?>
                <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                <span class="subheading"><?php echo get_bloginfo( 'description' ); ?></span>
              <?php } else { ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                <?php endwhile; endif; ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </header>