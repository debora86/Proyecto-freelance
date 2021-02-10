<div class="carousel-inner" >
		<?php
			$args =( array
					('post_type' => 'slider',
					'orderby' => 'date',
					'order' => 'asce',
					'posts_per_page' => -1 
					)); 
			$slider_banner = new WP_Query($args)
		?>
		<?php if ($slider_banner->have_posts()) :
			$i= 0; ?>

			<!-- Wrapper for slides -->
		   
			    <?php while ( $slider_banner->have_posts() ) : $slider_banner->the_post(); ?>
			    <div class="carousel-item <?php  $i++; if ($i == 1 ) { echo 'active'; }?>" >
			       <?php the_post_thumbnail('post-thumbnail'); ?>
				</div>
			
			<!-- End of the loop -->
			<?php endwhile; endif;?>
			<?php  wp_reset_query();?>
	</div>
	<!-- Controls -->
	<a class="carousel-control-prev" href="#carruselFrontal" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carruselFrontal" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>		