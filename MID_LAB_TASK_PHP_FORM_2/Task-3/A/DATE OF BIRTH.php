<?php 

	$date = $_REQUEST['date'];


	if($date != "")
	{
		echo $date;
	}
	else
	{
		echo "Null";
	}

?>