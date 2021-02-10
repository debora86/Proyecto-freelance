<?php get_header('page') ?>

<section class="container ">
	<div class="card-body">
		<?php 
		while (have_posts()): the_post();

	 	the_content();
	 endwhile; ?>
	</div>
	<?php $titulo = get_field('titulo_de_blogs');?>
	<h1 class="animate__animated animate__bounce titulos">
		Otros Eventos Relacionados
	</h1>
		<!-- aqui tengo los eventos -->
	<div class="row row-cols-1 row-cols-md-3">
		
		<?php global $post;
		$last_posts = get_posts(array('posts_per_page' => 3));
		foreach ( $last_posts as $post ) :
		 setup_postdata( $post );?>
		<?php get_template_part( 'template-part/loop', 'eventos' ); ?>
		<?php endforeach;
				 wp_reset_postdata();?>
	</div>
	</section>
 <?php get_footer(); ?>