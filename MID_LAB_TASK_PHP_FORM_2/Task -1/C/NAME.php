<?php 

	
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		Name: <input type="text" name="name" value="<?php if(isset($name)){ echo $name; }?>"/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>