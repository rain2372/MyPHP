$(document).ready(function(){
	$(".admin").hide();	
	$.get("http://localhost/MyPHP/index.php?/Login/isLogin", function(data){
		if(data!='')
		{
			$(".admin").show();
			$(".home").hide();
		}
	});
	$(".login").click(function(){
		$.get("http://localhost/MyPHP/index.php?/Login/index", function(data){
			$(".search").before(data);
		});
	});
	$(".setting").click(function(){
		$.get("http://localhost/MyPHP/index.php?/User/index", function(data){
			$(".search").before(data);
		});
	});
	$("#new").click(function(){
		$.get("http://localhost/MyPHP/index.php?/Post/newpost", function(data){
			$("#new").before(data);
			$("#new").hide();
		});
	});
	
	
	
});
		
