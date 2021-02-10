<?php 
// INCLUSION DE TODOS LOS ARCHIVOS A USAR 

// Register Custom Navigation Walker
// require get_template_directory() .'/inc/queries-widget.php';
// require get_template_directory() .'/inc/shortcodes.php';

require_once('bs4navwalker.php');
function iglesiatorrevieja_setup() {
	// imagenes destacadas
	add_theme_support('post-thumbnails');

	add_theme_support( 'align-wide' );

	add_image_size( 'media', 350, 240, false );
	add_image_size( 'square', 350, 350, false );
	add_image_size( 'portrait', 350, 724, true );
	add_image_size( 'cajas', 400, 375, true );
	add_image_size( 'mediano', 700, 400, true );
	add_image_size( 'full', 1200, 644, true );

}

 add_action('after_setup_theme','iglesiatorrevieja_setup');

 function iglesiatorrevieja_styles() {

 	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1' );
	wp_enqueue_style( 'bootstrap_min', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.5.3' );
	wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,700;1,800&display=swap' , array(), '1.0.0');
	wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize'), '1.0.0');
	wp_enqueue_style( 'animated', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );

	}

add_action('wp_enqueue_scripts', 'iglesiatorrevieja_styles');


function bootstrap_js() {

	// escript
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), true);
	wp_enqueue_script('Slim', 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
	wp_enqueue_script('poperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
	wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js');
	wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/61620f196b.js');
	wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js');
 }
 
add_action( 'wp_enqueue_scripts', 'bootstrap_js');

		//* Add JavaScript before </body>
	function wow_init() { ?>
		<script type="text/javascript">
			new WOW().init();
		</script>
	<?php }


	function iglesiatorrevieja_widgets(){
		register_sidebar( array(
			'name' => 'Redes Sociales',
			'id' => 'redes_sidebar',
			'before_widget' => '<div class="redes ">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="text-center texto-primario">',
			'after_title' => '</h3>'
		));

		register_sidebar( array(
		 'name' => 'Sidebar 1',
		 'id' => 'sidebar_1',
		 'before_widget' => '<div class="text-center">',
		 'after_widget' => '</div>',
		 'before_title' => '<h3 class="texto-primario">',
		 'after_title' => '</h3>'
		));

		register_sidebar( array(
		 'name' => 'Sidebar 2',
		 'id' => 'sidebar_2',
		 'before_widget' => '<div class="text-center">',
		 'after_widget' => '</div>',
		 'before_title' => '<h3 class="text-center texto-primario">',
		 'after_title' => '</h3>'
		));
	} 
	add_action( 'widgets_init', 'iglesiatorrevieja_widgets' );


	function iglesiatorrevieja_menus() {
		register_nav_menus( array(
			'header-menu' => 'Menu Principal',
			'redes-sociales' => 'Footer Redes Sociales'

		));					 
	}
	add_action( 'init', 'iglesiatorrevieja_menus');

 ?>