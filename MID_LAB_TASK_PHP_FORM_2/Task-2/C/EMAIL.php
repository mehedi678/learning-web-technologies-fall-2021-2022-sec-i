<?php 

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
	}

?>

<html>
<head>
	<title>Email Form</title>
</head>
<body>
	<form method="post" >
		Email: <input type="email" name="email" value="<?php if(isset($email)){ echo $email; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>