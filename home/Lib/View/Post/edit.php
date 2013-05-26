<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
        	<div id="edit">
				<script src="<?php echo PUBLIC_PATH;?>/ckeditor/ckeditor.js"></script>	<!-- 载入可视化编辑器 -->
				<form action="<?php createUrl('Post','update');?>" method="post">
					<input type="hidden" name="pid" value="<?php echo $post['pid'];?>">
					<input type="text" class="span12" name="title" value="<?php echo $post['title'];?>"><br>
					<textarea class="span12" name="content" rows="18" cols="200" ><?php echo $post['content'];?></textarea><br>
					<script>
						CKEDITOR.replace('content');
					</script>
					<input type="submit" class="btn btn-primary pull-right" name="sub" value="重新发布"><br>
				</form>	
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>
