<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
			<div class="artical">
				<hgroup>
					<h3><a href="<?php createUrl('Post','index',$post['pid']);?>"><?php echo $post['title']?></a></h3>
					<h4><?php ?></h4>
				</hgroup>
				<p><?php echo $post['content'];?></p>			
				<hr>
			</div>
         	<div id="pagenav" class="pagination">
				<ul>
					<li><a href="<?php createUrl('Post','index',$page-1);?>">Prev</a></li>
					<li><a href="<?php createUrl('Post','index',$page);?>"><?php echo $page;?></a></li>
					<li><a href="<?php createUrl('Post','index',$page+1);?>">Next</a></li>
				</ul>
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>