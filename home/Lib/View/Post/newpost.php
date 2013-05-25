<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
		<div id="main" class="span8">
	        <div id="post">
				<script src="<?php echo PUBLIC_PATH;?>/ckeditor/ckeditor.js"></script>	<!-- 载入可视化编辑器 -->
				<form action="<?php createUrl('Post','add');?>" method="post">
					<input type="text" class="span8" name="title" placeholder="输入标题……"><br>
					<textarea class="span8" name="content" rows="18" cols="180" ></textarea><br>
					<label for="category">选择分类</label>
					<select name="cid" id="category">
						<?php foreach($category as $cate){;?>
							<option value="<?php echo $cate['cid'];?>"><?php echo $cate['title'];?></option>
						<?php };?>
					</select>
					<script>
						CKEDITOR.replace('content');
					</script>
					<input type="submit" class="btn btn-primary pull-right" name="sub" value="发布"><br>
				</form>	
			</div>	
       	</div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>
