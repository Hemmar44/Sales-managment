<?php

require_once 'Sale.php';

$sale = new Sale($database);

$sales = [];

$sales = $sale->database()->selectAll("sales");

//var_dump($sales);

include("layouts/header.php");
?>		
		<div class=col-md-12>
		<div id="sorters">
			<div class="form-inline">
					<label class="mr-sm-2" for="dataSelector">Search by</label>
  					<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="dataSelector">
    					<option selected>Choose...</option>
    					<option value="Name">Name</option>
    					<option value="Product">Product</option>
    					<option value="Institution">Institution</option>
    					<option value="Advisor">Advisor</option>
  					</select>
					<div id="byName" class="search">
			  			<label class="sr-only" for="searchByName"></label>
			  			<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchByName" name="searchByName" placeholder="Search by name">
			  		</div>
					
					<div id="byProduct" class="search">
			  			<label class="sr-only" for="searchByProductProduct"></label>
			  			<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchByProduct" name="searchByProduct" placeholder="Search by product">
			  		</div>

					<div id="byInstitution" class="search">
			  			<label class="sr-only" for="searchByInstitution"></label>
			  			<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchByInstitution" name="searchByInstitution" placeholder="Search by institution">
			  		</div>
			  			
			  		<div id="byAdvisor">
	  					<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="searchByAdvisor">
	    					<option selected>Choose...</option>
	    					<option value="Marcin">Marcin</option>
	    					<option value="Magda">Magda</option>
	    				</select>	
    				</div>
  					
			</div>
		</div>

		<table id="dataTable" class="table table-sm table-bordered">
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
			      <th>Completed</th>
			      <th>Date</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  	<?php foreach($sales as $sale): ?>
			  		<tr>
			  		<td class="id"><?= $sale['id']; ?></td>
			  		<td class="Name"><?= $sale['name']; ?></td>
			  		<td class="Product"><?= $sale['product']; ?></td>
			  		<td class="Institution"><?= $sale['institution']; ?></td>
			  		<td class="amount"><?= $sale['amount']; ?></td>
			  		<td class="Advisor"><?= $sale['advisor']; ?></td>
			  		<td class="margin"><?= $sale['margin']; ?></td>
			  		<td class="commission"><?= $sale['commission']; ?></td>
			  		<td class="completed"><?= $sale['completed']; ?></td>
			  		<td class="date"><?= date('Y-m-d', strtotime($sale['date'])); ?></td>
			  		</tr>
				<?php endforeach; ?>
			   
			  </tbody>
			</table>

				
		</div>

<?php
include("layouts/footer.php");
?>