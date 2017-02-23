<?php

require_once 'Sale.php';

$sale = new Sale($database);

$sales = [];

$sales = $sale->database()->selectAll("sales");

//var_dump($sales);

include("layouts/header.php");
?>
		<div class=col-md-8>

		<table class="table table-sm table-bordered">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Name</th>
			      <th>Product</th>
			      <th>Institution</th>
			      <th>Amount</th>
			      <th>Advisor</th>
			      <th>Margin</th>
			      <th>Commission</th>
			      <th>Date</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  	<?php foreach($sales as $sale): ?>
			  		<tr>
			  		<td><?= $sale['id']; ?></td>
			  		<td><?= $sale['name']; ?></td>
			  		<td><?= $sale['product']; ?></td>
			  		<td><?= $sale['institution']; ?></td>
			  		<td><?= $sale['amount']; ?></td>
			  		<td><?= $sale['advisor']; ?></td>
			  		<td><?= $sale['margin']; ?></td>
			  		<td><?= $sale['commission']; ?></td>
			  		<td><?= date('Y-m-d', strtotime($sale['date'])); ?></td>
			  		</tr>
				<?php endforeach; ?>
			   
			  </tbody>
			</table>

				
		</div>

<?php
include("layouts/footer.php");
?>