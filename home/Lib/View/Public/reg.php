<?php include_once 'Public/header.php';?>
<div id="bodyer" class="container-fluid">
	<div class="row-fluid">
        <div id="main" class="span8">
            <div id="reg" class="span4 offset2">
            	<form action="<?php createUrl('Reg','reg')?>" method="post">
            			<label for="username">用户名</label>
            			<input type="text" id="username" name="username" placeholder="username">
            			<label for="password">密码</label>
            			<input type="password" id="password" name="password" placeholder="password">
            			<label for="repassword">确认密码</label>
            			<input type="password" id="repassword" name="repassword" placeholder="repassword">
				      	<button type="submit" class="btn">注册</button>
            	</form>
            </div>        
        </div>
       	<?php include_once 'Public/side.php';?>
    </div>
</div>
<?php include_once 'Public/footer.php';?>
