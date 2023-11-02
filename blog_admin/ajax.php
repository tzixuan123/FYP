<?php

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();




if($action == 'save_category'){
	$save = $crud->save_category();
	if($save)
		echo $save;
}
if($action == 'load_category'){
	$list = $crud->load_category();
	if($list)
		echo $list;
}
if($action == 'load_post'){
	$list = $crud->load_post();
	if($list)
		echo $list;
}

if($action == 'remove_category'){
	$remove = $crud->remove_category();
	if($remove)
		echo $remove;
}
if($action == 'publish_post'){
	$published = $crud->publish_post();
	if($published)
		echo $published;
}


if($action == 'remove_post'){
	$remove = $crud->remove_post();
	if($remove)
		echo $remove;
}
if($action == 'save_post'){
	$save = $crud->save_post();
	if($save)
		echo $save;
}