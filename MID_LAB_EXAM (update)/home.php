<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	
	<h1 align="center">Welcome Bob</h1>
	<h2 align="center"><a href="profile.php">Profile </a></h2> <br>
	<h2 align="center"><a href="changePassword.php">Change Password </a></h2> <br>
	<h2 align="center"><a href="UserList.php">User List </a></h2> <br>
	<h2 align="center"><a href="logout.php">logout </a></h2>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>


