<?php

function addDirClassPath(){

	$register_path = array(
		'BasicBackEnd' => 'app/BackEnd',
		'UserEditPage' => 'app/BackEnd/User',
		'Activate' => 'app',
		'Deactivate' => 'app',
		'BasicFrontEnd' => 'app/FrontEnd',
		'ClassFrontEndScripts' => 'app/FrontEnd',
	);

	return $register_path;
}

function autoload_register_service($register_path){

	foreach ($register_path as $key => $path) {
		$classes_pp = $key;
		new $classes_pp;
	}
}

function autoload_register_path($register_path, $class_name){

	foreach ($register_path as $path) {
		$pathv = BasicClassStrPlugin2_URL.$path.'/'.$class_name.'.php'; 
		include_once $pathv;
	}
}

spl_autoload_register(function ($class_name) { 
	$register_path = addDirClassPath();
	autoload_register_path($register_path, $class_name);
});

$register_path = addDirClassPath();
autoload_register_service($register_path);