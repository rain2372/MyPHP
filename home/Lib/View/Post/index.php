<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
        	<div class="artical">
				<hgroup>
					<h3><a href="<?php createUrl('Post','index',$post['pid']) ?>"><?php echo $post['title']?></a></h3>
					<h4></h4>
				</hgroup>
				<p><i class="icon-calendar"></i> <?php echo date('Y-m-d',$post['pdate']);?></p>
				<span class="admin">
					<a href="<?php createUrl('Post','edit',$post['pid']) ?>">编辑|</a>
					<a href="<?php createUrl('Post','del',$post['pid']) ?>">删除</a>
				</span>
				<p><?php echo $post['content'];?></p>
				<p><i class="icon-tags"></i>
					<?php foreach (getTag($post['tag']) as $tag){?>
						<a href="<?php createUrl('Tag','index',$tag)?>"> <?php echo $tag?></a>
					<?php }?>
				</p>				
				<hr>
			</div>
			<div id="pagenav">
					<ul class="pager">
						<li class="previous">
							<a href="<?php createUrl('Post','index',isset($page)? $page-1:0);?>">Prev</a>
						</li>
 						<li class="next">
 							<a href="<?php createUrl('Post','index',isset($page)? $page+1:1);?>">Next</a>
 						</li>
					</ul>
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>
