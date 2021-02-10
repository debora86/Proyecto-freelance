<?php 
/*
Template Name: Nosotros

*/ ?>

<?php get_header('page'); ?>


<section class="container ">
		<div class="card-body">
			<?php 
			while (have_posts()): the_post();

		 	the_content();
		 endwhile; ?>
		</div>
		
			<?php $nosotros1 = get_field('titulo_nosotros'); ?>
			<?php echo $nosotros1; ?>
			<?php $nosotros2 = get_field('sub_titulo'); ?>
			<?php echo $nosotros2; ?>
			
	</section>
 
<?php get_footer(); ?>