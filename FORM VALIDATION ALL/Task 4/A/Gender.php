<?php 

	if (empty($_REQUEST["gender"])) 
	  {
	    $gendererr = "Gender is required";
	  } 
	  else 
	  {
	    $gender = test_input($_REQUEST["gender"]);
	  }

?>


<html>
<head>
	<title>genderForm</title>
</head>
<body>
	<form method="post" >
		Gender :
		<input type="radio" name="gender" value="">Male
		<input type="radio" name="gender" value="">Female
		<input type="radio" name="gender" value="">Other <br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>