<?php

if ( ! class_exists( 'Activate' ) ) {
	/**
	 * Class Activate
	 * @package App\Activate
	 */
	class Activate {

		function __construct(){
			//echo "Activate";
		}


		public static function activate() {  

			wp_insert_post( array(
				'post_title'    => 'Demo Page2', 
				'post_content'  => 'Deme Page2', 
				'post_status'   => 'publish',
				'post_type'     => 'page',
			), true );
			

		}

	}

}




