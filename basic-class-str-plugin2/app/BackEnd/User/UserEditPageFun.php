<?php

require_once BasicClassStrPlugin2_URL.'app/BackEnd/BasicBackEnd.php';

class UserEditPageFun extends BasicBackEnd{

	function __construct(){   
		parent::__construct();
	}

	public function crf_show_extra_profile_fields2(){
		include_once $this->plugin_dir_path.'template/User/UserFields.php';
	}

	public function basicpluginstr_admin_menu_function(){

		add_menu_page( 'Basic Plugin', 'Basic Plugin', 'manage_options', 'basic-plugin', array($this, 'basic_plugin_function1'));

	}

	public function basic_plugin_function1(){
		echo "<h1> Basic Plugin Str1</h1>";
	}

}