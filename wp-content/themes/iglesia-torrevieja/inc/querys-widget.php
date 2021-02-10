<?php 
public function menu_redes()

	{

		$arg = array(
			'theme_location' => 'redes-sociales',
			'container' => 'div',
			'container_class' => 'redes',
			'link_before' => '<span class="sr-text">',
			'link_after' => '</span>'
		);
		 wp_nav_menu($arg);
		 	


	}


 ?>