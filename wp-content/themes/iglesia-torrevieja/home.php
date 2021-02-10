<!-- aqui tengo la vista general de los post -->
<?php get_header(); ?>
<?php 
$pagina_blog = get_option( 'page_for_posts' );
$imagen_id = get_post_thumbnail_id($pagina_blog );
$imagen_src = wp_get_attachment_image_src( $imagen_id, 'full')[0];
 ?>
 <div class="hero-paginas " style="background-image: url(<?php echo $imagen_src ?> );">

 	<h2 class="titulo-center"><?php echo get_the_title($pagina_blog); ?></h2>
 </div>
 <div class="container post">
 	<div class="row row-cols-1 row-cols-md-3">
		<?php while (have_posts()): the_post(); ?>
		<?php get_template_part( 'template-part/loop', 'eventos' ); ?>
	<?php endwhile; ?> 			
 	</div>
 	<div class="paginacion">
				<!-- <?php //echo paginate_links(); ?> -->
				<!-- esta es una manera -->
				<?php  next_posts_link('Anteriores'); ?>
				<?php  previous_posts_link('Siguientes'); ?> 
			</div>
 	
 </div>

<?php get_footer(); ?>