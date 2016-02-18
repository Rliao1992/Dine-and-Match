// JavaScript Document
$(document).ready(

function() {
	
	
	
	
	
	
	$("#submit").click(
	function(){
		console.log($("#FoodType").val());
		$("#budget, #food").css("display","none");
		$("#submit").css("display","none");
		$("#wineResult").css("display","block");
		$("#Back").show(300);
		$.ajax({
                    url: "wineGet.php",
                    dataType: "json",
                    type: "GET",
					data: {food:$("#FoodType").val(), price:$("#BudgetRange").val()},
					success: function(data) {
                        console.log(data);
						var listData = "";


             

                            // get the customer
                     
                            //console.log(customer);


                            for(var key = true in data) {
								listData += "<p>" + "<strong>" + key + "</strong>" + "<br/>" + data[key] + "<br/><br/>" + "</p>"; 
                               
                            }
							
							$("#wineResult").html(listData);
							console.log(listData);
                   


                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $("#wineResult").html(jqXHR.statusText);
                    }
                
			}
		);

	
	
	
	}
	
	
	
	
	
	
	
)
    
}

);