<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
        	<div class="artical">
        		<div class="span12">
					<hgroup class="span8">
						<h3><a href="<?php createUrl('Post','index',$post['pid']) ?>"><?php echo $post['title']?></a></h3>
						<h4></h4>
					</hgroup>
					<span class="admin span4">
						<a href="<?php createUrl('Post','edit',$post['pid'])?>" title="编辑"><i class="icon-edit"></i></a>&nbsp|&nbsp
						<a href="<?php createUrl('Post','del',$post['pid'])?>" title="删除"><i class="icon-trash"></i></a>
					</span>
				</div>
				<p><i class="icon-calendar"></i> <?php echo date('Y-m-d',$post['pdate']);?></p>
				
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
							<a href="<?php createUrl('Post','index',$page-1);?>">Prev</a>
						</li>
 						<li class="next">
 							<a href="<?php createUrl('Post','index',$page+1);?>">Next</a>
 						</li>
					</ul>
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>
