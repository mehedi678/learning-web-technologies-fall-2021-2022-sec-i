<?php 

	if (empty($_REQUEST["degree"]) ) 
		  {
		    $degreeerr = "Degree Is Required";
		  } 
		  else 
		  {
		  	echo $degreeerr;
		    }
?>


<html>
<head>
	<title>DegreeForm</title>
</head>
<body>
	<form method="post" >
		Degree:<br>
	<input type="checkbox" name="degree" value="">SSC<br>
	<input type="checkbox" name="degree" value="">HSC<br>
	<input type="checkbox" name="degree" value="">BSc<br>
	<input type="checkbox" name="degree" value="">MSc<br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>