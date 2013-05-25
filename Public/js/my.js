$(document).ready(function(){
	$("#newpost").click(function(){
		$.get("http://localhost/MyPHP/index.php?/Post/newpost", function(data){
			$(".post").before(data);
		});
	});
	
});
		
