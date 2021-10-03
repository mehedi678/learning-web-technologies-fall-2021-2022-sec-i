<?php 

	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		echo $email;
	}

?>

<html>
<head>
	<title>EmailForm</title>
</head>
<body>
	<form method="post" >
		Email: <input type="email" name="email" value=""/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>