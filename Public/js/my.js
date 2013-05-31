$(document).ready(function(){
	
	$(".admin").hide();		//所有'.admin'隐藏
	
	$.get("index.php?/Login/isLogin", function(data){
		if(data!='')
		{
			$(".admin").show();
			$(".home").hide();
		}
	});
	$(".login").click(function(){
		$.get("index.php?/Login/index", function(data){
			$(".search").before(data);
			$(".login").toggle("slow");
		});
	});
	$(".setting").click(function(){
		$.get("index.php?/User/index", function(data){
			$(".search").before(data);
			$(".setting").toggle("slow");
		});
	});
	$("#new").click(function(){
		$.get("index.php?/Post/newpost", function(data){
			$("#new").before(data);
			$("#new").hide();
		});
	});
	
	
	
});
		
