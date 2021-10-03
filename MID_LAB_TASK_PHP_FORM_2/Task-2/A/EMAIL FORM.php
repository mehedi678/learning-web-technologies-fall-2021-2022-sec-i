<?php 

	$email = $_REQUEST['email'];


	if($email != "")
	{
		echo $email;
	}
	else
	{
		echo "Null";
	}

?>