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
    				//alert(globalValue);
    			}
    	//search by product, name or institution
    			if(globalValue === "Product" || globalValue ==="Name" || globalValue==="Institution"){
	    			$("#searchBy" + globalValue).on("keyup", function(){
	    			var value = $(this).val();
	    			$("#dataTable tbody").find("tr").hide();
	    			//console.log($(this).val());
	    				$("#dataTable ." + globalValue).each(function (index, element) {
		        			var text = $(this).text();
		        			
		        			if(text.includes(value)) {
		        				$(element).closest("tr").show();
	        				}
	        			});
	        		});
    			}	
    			/*
        		$("searchBy" + globalValue).on("change", function(){
        			alert($(this).value());
        		});*/
    		});


    		/*
			$("#searchBy" + globalValue).on("keyup", function(){
				alert(globalValue);
    			var value = $(this).val();
    			$("#dataTable tbody").find("tr").hide();
    			//console.log($(this).val());
    			$("#dataTable ." + globalValue).each(function (index, element) {
        			var text = $(this).text();
        			
        			if(text.includes(value)) {
        				$(element).closest("tr").show();
        			}
        			
        			
       				
   			 	});
        	});*/
		
        	$("#searchBy" + globalValue).on("keyup", function(){
    			var value = $(this).val();
    			$("#dataTable tbody").find("tr").hide();
    			//console.log($(this).val());
    			$("#dataTable ." + globalValue).each(function (index, element) {
        			var text = $(this).text();
        			
        			if(text.includes(value)) {
        				$(element).closest("tr").show();
        		}
        			
        			
       				
   			 	});
        	});



    
});
    		

        
    
    