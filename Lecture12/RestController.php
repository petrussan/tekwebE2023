<?php
require_once("FoodRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];

switch($view){

	case "all":
		$foodRestHandler = new FoodRestHandler();
		$foodRestHandler->getAllFoods();
		break;
		
	case "single":
		$foodRestHandler = new FoodRestHandler();
		$foodRestHandler->getFood($_GET["id"]);
		break;

	case "" :
		//404 - not found;
		break;
}
?>
