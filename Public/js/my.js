$(document).ready(function(){
	$("#new").click(function(){
		$.get("http://localhost/MyPHP/index.php?/Post/newpost", function(data){
			$("#new").before(data);
			$("#new").hide();
		});
	});
	$(".login").click(function(){
		$.get("http://localhost/MyPHP/index.php?/Login/index", function(data){
			$(".login").html(data);
		});
		
	});
	
});
		
