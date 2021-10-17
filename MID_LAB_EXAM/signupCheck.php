<?php 
session_start();
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 	= $_POST['password'];
		$confirmpassword 	= $_POST['con_password'];
		$username 	= $_POST['username'];


		if($username != ""){
			if($password != ""){
				if($confirmpassword = $password){
					if($id !=""){

				
					setcookie('id', $id, time()+3600, '/');
					setcookie('username', $username, time()+3600, '/');
					setcookie('password', $password, time()+3600, '/');
					

					$myfile = fopen('userList.txt', 'a');
					$users = $id."|".$password."|".$username."\r\n";
					fwrite($myfile, $users);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "id";
				}
			}else{
					echo "invalid password conformation";
				}
			}else{
				echo "invalid password";
			}
		}else{
			echo "invalid username";
		}
	}
?>