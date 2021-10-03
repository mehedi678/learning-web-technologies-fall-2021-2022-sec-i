<?php 

	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['date'];
	}

?>


<html>
<head>
	<title>DOBForm</title>
</head>
<body>
	<form method="post" >
		Date of Birth: <input type="date" name="date" value="<?php if(isset($date)){ echo $date; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>