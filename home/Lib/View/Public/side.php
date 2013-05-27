<div id="side" class="span4">
	<div class="search">
    	<form class="navbar-form" action="<?php createUrl('Post','search')?>" method="post">
        	<input class="span12" type="search" name="search-key" placeholder="搜索">
        </form>
    </div>
    <hr>
    <div class="newpost">
    	<ul class="nav nav-list">
    		<li class="nav-header"><i class="icon-th-list"></i> 最新文章</li>
        	<?php foreach($newpost as $post){;?>
        	<li><a href="<?php createUrl('Post','index',$post['pid']);?>"><?php echo $post['title'];?></a></li>
            <?php }?>
        </ul>
    </div>
    <hr>
    <div class="tag">
    	<ul class="nav nav-list">
    		<li class="nav-header"><i class="icon-tags"></i> 标签墙</li>
        	<?php foreach($tags as $tag){;?>
        	<a href="<?php createUrl('Tag','index',$tag)?>"><?php echo $tag?></a>
            <?php }?>
        </ul>
    </div>
</div>
