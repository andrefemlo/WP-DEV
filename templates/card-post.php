
  <div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-4 py-5">
    <?php 
      if (have_posts()):
        while (have_posts()): the_post(); 
        ?>
              <article>
              <a href="<?php echo get_permalink(); ?>">
                  <div class="col">
                  <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="<?php 
                  if ( has_post_thumbnail() ) {
                    $thumbnail_url = get_the_post_thumbnail_url( null, 'full' );
                    echo "background-image: url('" . esc_url( $thumbnail_url ) . "'); background-position: center; background-size: cover;";
                  } else { 
                    ?>background-image: url('unsplash-photo-1.jpg'); background-position: center; background-size: cover; <?php
                  }?>">

                      <div class="d-flex flex-column h-100 p-4 ps-4 pe-4 pb-3 text-white text-shadow-1" style="background-color: rgba(0, 0, 0, 0.3);">
                        <h3 class="pt-1 mt-2 mb-2 display-8 lh-1 fw-bold"> <?php the_title(); ?> </h3>
                        <p><?php the_excerpt(); ?></p>
                        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                        <ul class="d-flex list-unstyled mt-auto">
                          <li class="me-auto">
                            <img src="<?php 
                                    echo get_avatar_url(get_the_author_meta('ID'));
                                  ?>" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
                          </li>
                          <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                            <small><?php the_category(); ?></small>
                        </li>
                        <li class="d-flex align-items-center">
                          <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                          <?php
                          $tags_list = get_the_tag_list( '', ', ' );
                          if ( $tags_list ) :
                            printf( '<small>%s</small>', $tags_list );
                          endif;
                          ?>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
                </a>
              </article>
        <?php
        endwhile; 
      else:
        ?> <p>Nothing Found</p> 
    <?php
      endif;
    ?>
  </div>

  <style>
    a {
    color: #fff;
    text-decoration: none;
}
  </style>