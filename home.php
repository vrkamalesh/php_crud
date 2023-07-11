<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
     <h1 style="text-align: center;margin:100px;font-size:60px;">Hello, <?php echo $_SESSION['name']; ?></h1> 
     <br>
     <a href="logout.php" style="margin-left:429px; font-size:50px;color:maroon;">CRUD_APPLICATION</a>
</body>
</html>

<?php 
}else{
     header("Location: main.php");
     exit();
}
 ?>