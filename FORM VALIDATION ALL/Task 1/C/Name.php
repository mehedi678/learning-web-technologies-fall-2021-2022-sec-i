<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$name[2] = $name;
		if ( ) 
	    {
	      echo $name;
	    }
		else
		{
			echo "Not valid";
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