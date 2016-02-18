$(document).ready(
	function() {
	
			
		
		
		$("#match").click(
		function(){
		$("#food").show(300);
		$("#budget").show(300);
		$("#submit").show(300);
		$("#contact").hide(300);
		$("#match").hide(300);
		
	}
);
		$("#contact").click(
		function(){
			$("#match").hide(300);
			$("#form").show(300);
			$("#Back").show(300);
			$("#contact").hide(300);
		}
		)
    	
		$("#Back").click(
		function(){
			location.reload();
		}
		)

}

);// JavaScript Document