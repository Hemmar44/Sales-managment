<?php

require_once '/../classes/Database.php';



$database = new Database; 

$id = $_POST["id"];
$key = lcfirst($_POST["column"]);
$value = $_POST["value"];

if($key === "date"){
	$value = date("Y-m-d H:i:s", strtotime($value));
}

$commission = $_POST["commission"];

if($database->update("sales", $id, [
		$key => $value,
		"commission" => $commission
	])) {

	echo '<div class="alert alert-success">Database has been successfully updated</div>';
}
else {

	echo '<div class="alert alert-warning">Nothing to update</div>';

}







?>