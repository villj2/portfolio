<?php

		// Exit if accessed directly
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

		function fusion_builder_add_veterinarian_demo( $demos ) {

		$demos['veterinarian'] = array (
  'category' => 'Avada Veterinarian',
  'pages' => 
  array (
  ),
);

			return $demos;
		}
		add_filter( 'fusion_builder_get_demo_pages', 'fusion_builder_add_veterinarian_demo' );