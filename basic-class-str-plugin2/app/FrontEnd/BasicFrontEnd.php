<?php
class BasicFrontEnd{

	public $plugin_dir_path;
	public function __construct() {  
		$this->plugin_dir_path = plugin_dir_path( dirname( __FILE__, 1 ) );
	}

}
