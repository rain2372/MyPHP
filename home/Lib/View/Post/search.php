<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
        	<div class="search">
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
			</div>
			<div id="pagenav">
					<ul class="pager">
						<li class="previous">
							<a href="<?php createUrl('Post','search',isset($page)? $page-1:1);?>">Prev</a>
						</li>
 						<li class="next">
 							<a href="<?php createUrl('Post','search',isset($page)? $page+1:2);?>">Next</a>
 						</li>
					</ul>
			</div>
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>

