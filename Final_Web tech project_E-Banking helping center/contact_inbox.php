<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="webtech";
$link=mysqli_connect($servername,$username, $passward,$dbname);
$con=mysqli_select_db($link, $dbname);



if($con)
{
//echo("connection is successful");
}



else

{

  die("connection failed because".mysqli_connect_error());
}

?>



<html>
<head><title> Contact </title>

<style>
  
  body{

    background-color: violet;

  }

form{

  height: 50%;
  width: 30%;
  background-color: gray;
}


</style>



</head>
<body>




<center>


<h3> E-Banking Contact portal </h3>


<form name="form1" action="" method="post"›

<table>
<tr>
<td>Enter name</td>
<br>

<td><input type="text" name="username"></td>
</tr>

<br>
<tr>
<br>

<tr>




</tr>



<tr>
<td>email</td>
<br>
<td><input type="email" name="email"></td>
<br>
</tr>
<br>



<td>message</td>
<br>
<td><input type="message" name="message"></td>
<br>
</tr>
<tr>
<br>
<br>





<td colspan ="2" align="center">
<input type="submit" name="submit1" value="insert">
<input type="submit" name="submit2" value="delete">

<input type="submit" name="submit4" value="display">
<input type="submit" name="submit5" value="search">



</td>
</tr>
</table>
</form>
</center>
</body>
</html>




<?php
if(isset($_POST["submit1"]))
{
mysqli_query($link,"insert into contact_inbox values('$_POST[username]','$_POST[email]','$_POST[message]')");
echo "Record inserted successfully";
}
if(isset($_POST["submit2"]))
{
mysqli_query ($link,"delete from contact_inbox where username='$_POST[username]'");
echo "Record deleted successfully";
}
if(isset($_POST["submit3"]))
{
mysqli_query($link,"update contact_inbox set username='$_POST[email]' where username='$_POST[username]'"
);
}

if(isset($_POST ["submit4"]))
{
$res=mysqli_query($link,"select * from contact_inbox");
echo"<table border=l>";
  echo"<tr>";
  echo"<th>"; echo "name"; echo"</th>";
  echo"<th>"; echo "email"; echo"</th>";
  echo"<th>"; echo "message"; echo"</th>";
  echo"</tr>";
while($row=mysqli_fetch_array ($res))

{
   echo"<tr>";
   echo"<td>"; echo $row ["username"];echo"</td>";
   echo"<td>"; echo $row ["email"]; echo"</td>";
   echo"<td>"; echo $row ["message"]; echo"</td>";
   echo"</tr>";
}
echo"</table>";
}
if(isset($_POST ["submit5"]))
{
$res=mysqli_query($link,"select * from contact_inbox where username='$_POST[username]'");
echo"<table border=l>";

  echo"<tr>";
  echo"<th>"; echo "name"; echo"</th>";
  echo"<th>"; echo "email"; echo"</th>";
  echo"<th>"; echo "message"; echo"</th>";
  echo"</tr>";
 while($row=mysqli_fetch_array($res))

{
  echo"<tr>";
  echo"<td>"; echo $row ["username"]; echo"</td>";
  echo"<td>"; echo $row ["email"]; echo"</td>";
  echo"<td>"; echo $row ["message"]; echo"</td>";
  echo"</tr>";
}
echo"</table>";
}
?>