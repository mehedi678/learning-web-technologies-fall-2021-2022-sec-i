<?php 

	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST['gender'];
	}

?>


<html>
<head>
	<title>Gender Form</title>
</head>
<body>
	<form method="post" >
		Gender :
		<input type="radio" name="gender" value="<?php if(isset($gender)){ echo $gender; }?>">Male
		<input type="radio" name="gender" value="<?php if(isset($gender)){ echo $gender; }?>">Female
		<input type="radio" name="gender" value="<?php if(isset($gender)){ echo $gender; }?>">Other <br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>