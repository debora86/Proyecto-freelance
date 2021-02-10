<?php 
				$args = array('post_type' =>'galeria_iglesia' ,
				'post_per_page' => 30,
				'category' => '$'
				 );
				$gales = new WP_Query($args);
				while ($gales->have_posts()):$gales->the_post(); ?>
				<h1 class="titulos2">
					<?php the_title(); ?>	
				</h1>
				<div class="galeria">
					<?php $galeria1 = get_field('galeria-home');
						
						$i = 1;
					foreach($galeria1 as $id):
					$size = ($i == 1 || $i == 5 ) ? 'portrait' : 'square';

					$imagenThumb = wp_get_attachment_image_src( $id, $size)[0];
					$imagen =  wp_get_attachment_image_src( $id, 'full')[0];?>

					<div class="img-galeria">
						<img src="<?php echo $imagenThumb; ?>" alt="imagen">
					</div>
						
					<?php  $i++; endforeach; ?>
					<?php endwhile; wp_reset_postdata(); ?>		
				</div>