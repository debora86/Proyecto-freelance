<div class="contenedor-testimoniales">
	<ul class="listado-testimoniales">
		<?php 
		function testimonio_shorcode($atts){
			$args = array('post_type' => 'testimoniales',
				'post_per_page' => 10 );
				$testimoniales = new WP_Query($args);
				while ($testimoniales->have_posts()):$testimoniales->the_post();?>
					<li class="testimonial text-center">
					 	<blockquote>
					 		<?php the_content(); ?>
					 	</blockquote>
					 	<footer class="testimonial-footer">
					 		<?php the_post_thumbnail('thumbnail'); ?>
					 		<p><?php the_title(); ?></p>
					 	</footer>
				 	</li>
			<?php endwhile; wp_reset_postdata(); ?>			
		<? } 
		add_shortcode( 'testimonios', 'testimonio_shorcode' );?>	
	</ul>
</div>