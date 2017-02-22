$(function(){
    		$("#margin").on("blur", function() {
    			var amount = $("#amount").val();
    			var margin = $("#margin").val();

    			var commission = amount * margin; 

    			$("#commission").val(commission);
    		})
    	});