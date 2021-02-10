<?php get_header(); ?>
<div id="carruselFrontal" class="carousel slide" data-ride="carousel">
	<!-- aqui tengo el carrusel -->
	 <?php get_template_part('template-part/loop', 'carrusel'); ?>
</div>
	<div class="contenido-1">
		<div class="container ">
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
	</div> 
	<div class="blog">
		<div class="container">
			<!-- aqui recibo el campo de campo personalizado -->
			<?php $titulo = get_field('titulo_de_blogs');?>
			<h1 class="animate__animated animate__bounce titulos">
				<!-- aqui lo imprimo -->
				<?php echo $titulo; ?>
			</h1>
			<!-- aqui tengo los eventos -->
			<div class="row row-cols-1 row-cols-md-3">
			
				<?php get_template_part( 'template-part/loop', 'eventos' ); ?>
				
			</div>
		</div>
	</div>
	<?php 
		$area1 = get_field('imagen_fondo');
		$imagen = wp_get_attachment_image_src($area1['imagen_font'], 'full')[0];
		$imagen2 = wp_get_attachment_image_src($area1['foto_pastor'], 'cajas')[0]; 
	?>
	<div class="hero-scroll" style="background-image: url(<?php echo esc_attr($imagen); ?> );"> 
		<div class="container">
			<div class="row row-cols-1 ">
				<div class="col-md-6">
					<p class="titulo2" >
						<?php echo esc_html($area1['titulo_pastor'] ); ?>
					</p>
					<p class="texto_pastor"><?php echo esc_html($area1['descripcion'] ); ?></p>
				</div>
				<div class="col-md-6">
					<div class="imagen-pastor">
						<img class="pastor" src="<?php echo esc_attr($imagen2); ?>" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!-- galeria -->
				<?php get_template_part( 'template-part/loop', 'galerias'); ?>
		</div>	
	</div>
	<div class="testimoniales">
		<?php 
		 ?>
	</div>
<?php get_footer(); ?>