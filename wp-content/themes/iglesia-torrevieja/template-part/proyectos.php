<div class="row row-cols-1 row-cols-md-3">
        <?php global $post;

        $last_posts = get_posts(array('posts_per_page' => 3));

        foreach ( $last_posts as $post ) :
         setup_postdata( $post );?>

        <div class="col mb-4">
            <div class="card">
              <a class="card-img-top" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('media');?>
              </a>
              <div class="card-body">
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <p class="card-text">
                  <?php echo substr(strip_tags($post->post_content), 0, 100);?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Mas Informaciòn
                </a>
              </div>
                <div class="card"></div>
              <div class="card-footer">
                <small class="text-muted">Fecha: <?php the_time( get_option('date_format')); ?>
                </small>
              </div>
            </div>
        </div>

        <?php endforeach;
         wp_reset_postdata();
          ?>
       
      </div>