<div id="page" class="site">
<header>
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Sixth navbar example">
    <div class="container-fluid container">
      <?php if ( has_custom_logo() ) : ?>
        <div class="navbar-brand"><?php the_custom_logo(); ?></div>
      <?php else : ?>
        <a chass="navbar-brand" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
      <?php endif; ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav me-auto mb-2 ms-3 mb-xl-0">
          <?php wp_nav_menu( 
                array( 
                'theme_location' => 'wpdevs_main_menu', 
                'depth' => 3, 
                'container' => 0, 
                'items_wrap' => '%3$s')); 
          ?>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
        <!-- 
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div> -->
      </div>
    </div>
  </nav>
</header>