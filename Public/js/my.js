$(document).ready(function(){
	
	//设置网站地址
	var host = 'http://localhost/MyPHP/';
	
	$(".admin").hide();		//所有'.admin'隐藏
	
	$.get(host+"index.php?/Login/isLogin", function(data){
		if(data!='')
		{
			$(".admin").show();
			$(".home").hide();
		}
	});
	$(".login").click(function(){
		$.get(host+"index.php?/Login/index", function(data){
			$(".search").before(data);
			$(".login").toggle("slow");
		});
	});
	$(".setting").click(function(){
		$.get(host+"index.php?/User/index", function(data){
			$(".search").before(data);
			$(".setting").toggle("slow");
		});
	});
	$("#new").click(function(){
		$.get(host+"index.php?/Post/newpost", function(data){
			$("#new").before(data);
			$("#new").hide();
		});
	});
	
	
	
});
		
