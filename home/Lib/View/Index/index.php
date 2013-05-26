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
						<hgroup>
							<h3><a href="<?php createUrl('Post','index',$p['pid']) ?>"><?php echo $p['title']?></a></h3>
							<h4><i class="icon-calendar"></i><?php echo date('Y-m-d',$p['pdate']);?></h4>
						</hgroup>
						<p><?php echo cutstr($p['content']);?>……</p>
						<p><i class="icon-tags"></i><a href=""> <?php echo $p['tag']?></a></p>			
						<hr>
					</div>
				<?php }?>
				<div id="pagenav" class="pagination">
					<ul>
						<li><a href="<?php createUrl('Index','page',isset($page)? $page-1:0);?>">Prev</a></li>
						<li><a href="<?php createUrl('Index','page',isset($page)? $page:1);?>"><?php echo isset($page)? $page:1;?></a></li>
						<li><a href="<?php createUrl('Index','page',isset($page)? $page+1:2);?>">Next</a></li>
					</ul>
				</div>
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>