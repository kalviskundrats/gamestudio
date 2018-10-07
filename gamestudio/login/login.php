<?php include('../registration/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2 id="login">Login</h2>
  </div>

  <form method="post" name="login" action="login.php">
  	<?php include('../registration/errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" required name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" required name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="../registration/register.php">Sign up</a>
  	</p>
  </form>
	<?php
		if(isset($_POST["login_user"]))
		{
		$res=mysqli_query($link,"SELECT * FROM users WHERE username='$_POST[username]' && password='$_POST[password]'");
		while($row=mysqli_fetch_array($res))
		{
		?>
			<script type="text/javascript">
			window.location="../admin/admin.php";
			</script>
			<?php
		}
		/*}if(isset($_POST["login_user"]))
		{
		$res=mysqli_query($link,"SELECT * FROM users WHERE username='$_POST[admin]' && password='$_POST[03041994]'");
		while($row=mysqli_fetch_array($res))
		{
		?>
			<script type="text/javascript">
			window.location="../admin/admin.php";
			</script>
			<?php
		}*/
		}
		?>
</body>
</html>
