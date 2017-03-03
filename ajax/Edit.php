<?php


require_once '/../classes/Sale.php';



$sale = new Sale($database); 

$id = $_POST["id"];
$key = lcfirst($_POST["column"]);
$value = $_POST["value"];

if($key === "date"){
	$value = date("Y-m-d H:i:s", strtotime($value));
}

if(isset($_POST["commission"])) {
$commission = $_POST["commission"];
}
if($key === "completed") {

	if($sale->database()->update("sales", $id, [
		$key => $value
		
	])) {
		//messages must change next!
	echo '<div class="alert alert-success">Database has been successfully updated</div>';
	}
	else {

	echo '<div class="alert alert-warning">Nothing to update</div>';

	}

}
else {

	if($sale->database()->update("sales", $id, [
			$key => $value,
			"commission" => $commission
		])) {

		echo '<div class="alert alert-success">Database has been successfully updated</div>';
	}
	else {

		echo '<div class="alert alert-warning">Nothing to update</div>';

	}
}






?>