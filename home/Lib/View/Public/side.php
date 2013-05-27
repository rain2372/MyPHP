<div id="side" class="span4">
	<div class="search">
    	<form class="navbar-form" action="<?php createUrl('Post','search')?>" method="post">
        	<input class="span12" type="search" name="search-key" placeholder="搜索">
        </form>
    </div>
    <hr>
    <div class="newpost">
    	<ul class="nav nav-list">
    		<li class="nav-header">最新文章</li>
    		<li class="active"><a href="">New Post</a></li>
        	<?php foreach($newpost as $post){;?>
        	<li><a href="<?php createUrl('Post','index',$post['pid']);?>"><?php echo $post['title'];?></a></li>
            <?php }?>
        </ul>
    </div>
    <hr>
    <div class="tag">
    	<ul class="nav nav-list">
    		<li class="nav-header">标签云</li>
    		<li class="active"><a href="">tags</a></li>
        	<?php foreach($tags as $tag){;?>
        	<li><a href=""><?php echo $tag?></a></li>
            <?php }?>
        </ul>
    </div>
</div>
