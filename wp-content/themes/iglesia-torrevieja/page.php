<?php get_header('page'); ?>
	<?php if(is_page( 'contactos' )): ?>
		<div class="contactos">
			<?php the_content(); ?>
			
		</div>	

	<?php else: ?>
			<div class="container">
				<div class="row">
					<?php while (have_posts()): the_post();?>
						<div class="col ">
							<div class="caja-1">
								<?php the_content(); ?>
							</div>
						</div>	
					<?php endwhile; wp_reset_postdata();?>
				</div>
			</div>
			
		
<?php endif; ?>



<?php get_footer(); ?>