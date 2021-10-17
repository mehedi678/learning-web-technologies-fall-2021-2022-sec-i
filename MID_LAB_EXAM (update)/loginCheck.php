<?php 
	session_start();

	if(isset($_POST['submit'])){

		$userId 	= $_POST['userId'];
		$password 	= $_POST['password'];

		if($userId != ""){
			if($password != ""){
				
				$myfile = fopen('userList.txt', 'r');
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($userId == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php');
					}

				}
				

			}else{
				echo "invalid password";
			}
		}else{
			echo "invalid username";
		}
	}
?>