<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
	        <div class="post">
	            <?php foreach($post as $p){;?>
					<div class="artical">
						<hgroup>
							<h3><a href="<?php createUrl('Post','index',$p['pid']);?>"><?php echo $p['title']?></a></h3>
							<h4><i class="icon-calendar"></i><?php echo date('Y-m-d',$p['pdate']);?></h4>
						</hgroup>
						<p><?php echo cutstr($p['content']);?>……<a class="btn btn-mini" href="<?php createUrl('Post','index',$p['pid']);?>"><i class="icon-hand-right"></i></a></p>			
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