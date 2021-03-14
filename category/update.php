<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files
include_once '../config/database.php';
include_once '../objects/category.php';

// instantiate database object
$database = new Database();
$db = $database->getConnection();
 
// instantiate category object
$category = new Category($db);

// get id 
$data = json_decode(file_get_contents("php://input"));

// set ID 
$category->id = $data->id;

// set category property values
$category->name = $data->name;
$category->description = $data->description;

// run query
if ($category->update()) {
	echo '{';
		echo '"message": "Category was updated."';
	echo '}';
} else {
	echo '{';
		echo '"message": "Unable to update category."';
	echo '}';
} //if ($category->update())
