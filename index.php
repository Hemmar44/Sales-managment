<?php

require_once 'Sale.php';

$sale = new Sale($database);

if($sale->database()->submitted()) {

$sale->database()->insert('sales', [
	"name" => $_POST["name"],
	"product" => $_POST["product"],
	"institution" => $_POST["institution"],
	"amount" => intval($_POST["amount"]),
	"advisor" => $_POST["advisor"],
	"margin" => floatval($_POST["margin"]),
	"commission" => floatval($_POST["commission"])
	]);
}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>

		<div class=container>
			<header class=col-md-12>

			<h1>Hemmar Customer managment system</h1>

			</header>

			<div class=col-md-8>

				<h2>Enter sale data</h2>
				<form method="post" action="#">
				  <div class="form-group">
				    <label for="name">Customer name</label>
				    <input type="text" class="form-control" id="name" name="name" required>
				  </div>
				  <div class="form-group">
				    <label for="product">Product</label>
				    <select class="form-control" id="product" name="product">
				      <option>Mortgage</option>
				      <option>Loan</option>
				      <option>Insurance</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="institution">Institution</label>
				    <input type="text" class="form-control" id="institution" name="institution" required>
				  </div>
				  <div class="form-group">
				    <label for="amount">Amount</label>
				    <input type="text" class="form-control" id="amount" name="amount" required>
				  </div>
				  <div class="form-group">
				    <label for="advisor">Advisor</label>
				    <select class="form-control" id="advisor" name="advisor">
				      <option>Marcin</option>
				      <option>Magda</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="margin">Margin</label>
				    <input type="text" class="form-control" id="margin" name="margin" required>
				  </div>
				  <div class="form-group">
				    <label for="commission">Commission</label>
				    <input type="text" class="form-control" id="commission" name="commission" readonly>
				  </div>
				  
				  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		</div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
  
  </body>
</html>

