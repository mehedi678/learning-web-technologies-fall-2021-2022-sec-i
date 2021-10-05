<?php 

	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	     {
	      $emailErr = "Invalid email format";
	     }
		else{
			echo "Enter a email adress";
		}
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