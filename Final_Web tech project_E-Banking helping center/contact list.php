<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="my_db"; 
$link=mysqli_connect($servername,$username, $passward,$dbname);
$con=mysqli_select_db($link, $dbname);

//<a href="Login.php">Log in  </a>
if($con)
{
   echo("connection is successful");
}

else

{

  die("connection failed because".mysqli_connect_error());
}
?>

<html>
<head><title>database operation </title></head>
<body>
<center>

<h3> product related support  </h3>
   
<form name="form1" action="" method="post"›

<table>

<tr>
<td>Enter username</td>
<br>

<td><input type="text" name="username"></td>
</tr>
<br>
<br>

<br>
<tr>
<br>

<td>Enter product name</td>
<br>
<td><input type="text" name="productname"></td>
</tr>

<br> 
<br>

<tr>

<td>Message</td>
<br>

<td><input type="text" name="message"></td>
<br>

</tr>


   
<br>
<br>
<br>

<td colspan ="2" align="center">
<input type="submit" name="submit1" value="insert">
<input type="submit" name="submit2" value="delete">
<input type="submit" name="submit3" value="update">
<input type="submit" name="submit4" value="display">
<input type="submit" name="submit5" value="search">
<a href="Login.php"> Login </a>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>


<?php
if (isset($_POST["submit1"]))
{
mysqli_query($link,"insert into product values('$_POST[username]',' $_POST[productname]',' $_POST[message]')");

echo "Record inserted successfully";
}
if(isset($_POST["submit2"]))
{
mysqli_query ($link,"delete from product where username='$_POST[username]'");

echo "Record deleted successfully";
}

if(isset($_POST["submit3"]))
{
mysqli_query ($link,"update product set username='$_POST[productname]' where username='$_POST[username]'"
);
}

if (isset($_POST ["submit4"]))
{

$res=mysqli_query($link,"select	* from product");
echo"<table border=l>";

   echo"<tr>";

   echo"<th>"; echo "username"; echo"</th>";
   echo"<th>"; echo "productname"; echo"</th>";
   echo"<th>"; echo "message"; echo"</th>";
   echo"</tr>";

while($row=mysqli_fetch_array($res))

{
   
   echo"<tr>";

   echo"<td>"; echo $row ["username"];echo"</td>";
   echo"<td>"; echo $row ["productname"]; echo"</td>";
   echo"<td>"; echo $row ["message"]; echo"</td>";
   echo"</tr>";

 }
 echo"</table>";

if (isset($_POST ["submit5"]))	
{
$res=mysqli_query($link,"select	from * product");
echo"<table border=l>";

   echo"<tr>";
   echo"<th>"; echo "username"; echo"</th>";
   echo"<th>"; echo "productname"; echo"</th>";
   echo"<th>"; echo "message"; echo"</th>";
   echo"</tr>";
while($row=myself_fetch_array($res))

{

   echo"<tr>";
   echo"<td>"; echo $row ["username"];echo"</td>";
   echo"<td>"; echo $row ["productname"]; echo"</td>";
   echo"<td>";  echo $row ["message"]; echo"</td>";
   echo"</tr>";


}


echo"</table>";


}
}

?>

}
}

?>
