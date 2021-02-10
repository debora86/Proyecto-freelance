<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<?php 
		$imagen_id = get_post_thumbnail_id();
		$imagen_src = wp_get_attachment_image_src( $imagen_id, 'full')[0]; 
		?>
		
	</head>
	<body>
		<header  class="hero-paginas " style="background-image: url(<?php echo $imagen_src ?> );" >
			<nav id="menu" class="navbar navbar-expand-lg fixed-top">
				<div class="container">
					<div class="logo"> 
						<a href="<?php echo site_url('/'); ?>">
							<img src="<?php echo get_template_directory_uri() ?>/img/logo.png" class="rounded-circle img-fluid float-left">
						</a>
					</div>
					<!-- menu aqui -->
					<button 
						class="navbar-toggler" 
						type="button" 
						data-toggle="collapse"
						data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" 
						aria-expanded="false" 
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>					 
					</button>
	 					
							<?php 
								wp_nav_menu(array(
								'theme_location' => 'header-menu',
								'depth'          =>  2,
								'container'      => 'div',
								'container_class'=> 'navbar-collapse collapse',
								'container_id'   => 'navbarSupportedContent',
								'menu_class'     => 'nav navbar-nav mr-auto',
								'fallback_cb'    => 'bs4navwalker::fallback',
		     					'walker'         =>  new bs4navwalker(),
								  ));
							?>
	 				</div>

				</div>
			</nav>
			<div class="container titulo-center">
	 					<?php while( have_posts() ): the_post(); ?>
	 						 <?php the_title(); ?>
	 						 
	 						<?php endwhile; ?>
	 				</div>
		</header>
	
	

