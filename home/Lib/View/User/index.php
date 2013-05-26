<div class="userinfo">
	<form action="<?php createUrl('User', 'update');?>" method="post">
		<input type="hidden" name="uid" value="<?php echo $user['uid'];?>">
		<label for="username">用户名</label>
		<input type="text" id="username" name="username" value="<?php echo $user['username'];?>">
		<label for="email">邮箱</label>
		<input type="email" id="email" name="email" value="<?php echo $user['email'];?>">
		<label for="password">密码</label>
		<input type="password" id="password" name="password"><br>
		<input type="submit" class="btn btn-primary" name="sub" value="更新资料"><br>
	</form>
</div>


