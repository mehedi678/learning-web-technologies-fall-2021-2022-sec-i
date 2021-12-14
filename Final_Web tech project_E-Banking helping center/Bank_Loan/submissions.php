
<!DOCTYPE html>
<html>
<head>
    <style>

table,th,tr,td

{

border-style:solid;

border-width:2px;

border-color:black;

}
table {
    vertical-align: middle;
}

</style>

    <title>Submissions</title>
</head>
<body align="center">
    <h1>Submissions</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT first_name, email,loan_amount,nid_no,url FROM loan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align='center'><tr><th>First name</th><th>Email</th><th>Contact No</th><th>Loan type</th><th>Loan Amount</th> <th>nid_no</th> <th>URL</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "</td><td>".$row["first_name"]."</td><td>".$row["email"]."</td><td>".$row["loan_amount"].""</td> <td>".$row["nid_no"].</td><td>".'<a href = "'.$row["url"].'" target="_blank">view</a>'."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>