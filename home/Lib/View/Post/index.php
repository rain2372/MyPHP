<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
        	<div class="artical">
				<hgroup>
					<h3><a href="<?php createUrl('Post','index',$post['pid']) ?>"><?php echo $post['title']?></a></h3>
					<h4></h4>
				</hgroup>
				<a href="<?php createUrl('Post','edit',$post['pid']) ?>">编辑|</a>
				<a href="<?php createUrl('Post','del',$post['pid']) ?>">删除</a>
				<p><?php echo $post['content'];?></p>			
				<hr>
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>
