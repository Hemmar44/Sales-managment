$(function(){
		//counts commission
			
    		$("#margin").on("blur", function() {
    			var amount = $("#amount").val();
    			var margin = $("#margin").val();

    			var commission = amount * margin; 

    			$("#commission").val(commission);
    		});

    	//search engine
    		var globalValue;
    		$("#dataSelector").on("change", function() {
    			$("#dataTable td, #dataTable th").css("background-color", "white");
    			globalValue = $(this).val();
    			if(globalValue === "Choose...")
    				{
    					$(".search").hide();
    					return;
    				}
    			else {
    				var me = $("#by" + globalValue);
    				me.show();
    				me.siblings("div").hide();
    				
    			}

    	//search by name or institution
    			if(globalValue ==="Name" || globalValue==="Institution"){
	    			$("#searchBy" + globalValue).on("keyup", function(){
	    			var value = $(this).val();
	    			var lower = globalValue.toLowerCase();
	    			$("." + lower).css("background-color", "#E8E8E8");
	    			$("#dataTable tbody").find("tr").hide();
	    				$("#dataTable ." + globalValue)
	    					.css("background-color", "#E8E8E8")
	    					.each(function (index, element) {
			        			var text = $(this).text();
			        			
			        			if(text.includes(value)) {
			        				$(element).closest("tr").show();
		        				}
		        		});
		        	});
    			}	
    		//search by product, advisor, month
    			else if(globalValue === "Product" || globalValue === "Advisor" || globalValue === "Date") {
	        		$("#searchBy" + globalValue).on("change", function(){
	        		var value = $(this).val();
	        		var lower = globalValue.toLowerCase();
	    			$("." + lower).css("background-color", "#E8E8E8");
	    			$("#dataTable tbody").find("tr").hide();
	    				$("#dataTable ." + globalValue)
	    					.css("background-color", "#E8E8E8")
	    					.each(function (index, element) {
			        			var text = $(this).text();
			        			
			        			if(text===value) {
			        				$(element).closest("tr").show();
		        				}
		        		});
		        	});
        		}
        	//search by Amount, Margin, Commission
        		else if(globalValue==="Amount" || globalValue==="Margin" || globalValue==="Commission") {
        			
        			var min = $("#min" + globalValue).val();       			
        			var max = $("#max" + globalValue).val();
       				var lower = globalValue.toLowerCase();
	    			
        			$("#min" + globalValue).on("keyup", function(){
        				$("#dataTable tbody").find("tr").hide();
        				$("." + lower).css("background-color", "#E8E8E8");
        				min = $(this).val();
        				$("#dataTable ." + globalValue)
        					.css("background-color", "#E8E8E8")
        					.each(function (index, element) {
			        			var text = $(this).text();
			        			
			        			if(Number(text)>=Number(min) && Number(text)<=Number(max)) {
			        				$(element).closest("tr").show();
		        				}
        				});
        			});

        			$("#max" + globalValue).on("keyup", function(){
						$("#dataTable tbody").find("tr").hide();
						$("." + lower).css("background-color", "#E8E8E8");
        				max = $(this).val();
        				$("#dataTable ." + globalValue)
        					.css("background-color", "#E8E8E8")
        					.each(function (index, element) {
			        			var text = $(this).text();
			        			if(Number(text)>=Number(min) && Number(text)<=Number(max)) {
			        				$(element).closest("tr").show();
		        				}


        				});
        			});
        			
        		}
    		});
		
        	



    
});
    		

        
    
    