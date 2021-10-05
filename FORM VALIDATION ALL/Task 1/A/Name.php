<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		if($name != "")
		{
			echo $name;
		}
		else{
			echo "Please Enter a Name";
		}

		
	}

?>


<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		Name: <input type="text" name="name" value=""/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>