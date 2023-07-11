<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="" href="style.css">
</head>
<style>
    body {
  background-image:url('img/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

<body>
     <form action="login.php" style="text-align: center; margin:80px; font-size:40px; font-weight:bold;" method="post">
     	<h2 >LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label style="font-weight:bold;">User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label style="font-weight:bold;">Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit" style="margin: 50px; font-size: 30px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; background-color: blue;">Login</button>
     </form>
</body>
</html>