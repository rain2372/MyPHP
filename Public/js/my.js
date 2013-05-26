$(document).ready(function(){
	$(".admin").hide();	
	$.get("http://localhost/MyPHP/index.php?/Login/isLogin", function(data){
		if(data!='')
		{
			$(".admin").show();
			$(".home").hide();
		}
	});
	$("#new").click(function(){
		$.get("http://localhost/MyPHP/index.php?/Post/newpost", function(data){
			$("#new").before(data);
			$("#new").hide();
		});
	});
	
	
	
});
		
