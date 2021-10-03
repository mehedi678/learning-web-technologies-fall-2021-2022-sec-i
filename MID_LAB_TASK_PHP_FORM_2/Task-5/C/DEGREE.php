<?php 

	if(isset($_REQUEST['submit'])){
		$deg = $_REQUEST['degree'];
	}

?>


<html>
<head>
	<title>Degree Form</title>
</head>
<body>
	<form method="post" >
		Degree:<br>
	<input type="checkbox" name="degree" value="<?php if(isset($deg)){ echo $deg; }?>">SSC<br>
	<input type="checkbox" name="degree" value="<?php if(isset($deg)){ echo $deg; }?>">HSC<br>
	<input type="checkbox" name="degree" value="<?php if(isset($deg)){ echo $deg; }?>">BSc<br>
	<input type="checkbox" name="degree" value="<?php if(isset($deg)){ echo $deg; }?>">MSc<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>