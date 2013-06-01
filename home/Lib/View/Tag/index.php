<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
        	<div id="new" class="admin input-append">
        		<input class="input-small" type="text" name="title" placeholder="写日志">
        		<span class="add-on"><i class="icon-pencil"></i></span>
        	</div>
	        <div class="post">
	            <?php foreach($post as $p){;?>
					<div class="article">
						<div class="span12">
							<hgroup class="span8">
								<h3><a href="<?php createUrl('Post','index',$p['pid']) ?>"><?php echo $p['title']?></a></h3>
								<h4></h4>
							</hgroup>
							<span class="admin span4">
								<a href="<?php createUrl('Post','edit',$p['pid'])?>" title="编辑"><i class="icon-edit"></i></a>&nbsp|&nbsp
								<a href="<?php createUrl('Post','del',$p['pid'])?>" title="删除"><i class="icon-trash"></i></a>
							</span>
						</div>
						<p><i class="icon-calendar"></i> <?php echo date('Y-m-d',$p['pdate']);?></p>
						<p><?php echo cutstr($p['content']);?>……</p>
						<p><i class="icon-tags"></i>
							<?php foreach (getTag($p['tag']) as $tag){?>
								<a href="<?php createUrl('Tag','index',$tag)?>"> <?php echo $tag?></a>
							<?php }?>
						</p>			
						<hr>
					</div>
				<?php }?>
				<div id="pagenav" class="pagination">
					<ul>
						<li><a href="<?php createUrl('Tag','page',$page-1) ?>">Prev</a></li>
						<li><a href="<?php createUrl('Tag','page',$page) ?>"><?php echo $page ?></a></li>
						<li><a href="<?php createUrl('Tag','page',$page+1) ?>">Next</a></li>
					</ul>
				</div>
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>