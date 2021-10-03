<?php 

	$name = $_REQUEST['name'];

	if($name != "")
	{
		echo $name;
	}
	else
	{
		echo "Null";
	}

?>