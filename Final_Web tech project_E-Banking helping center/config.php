<?php
    $conn = mysqli_connect("localhost", "root", "", "webtech");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>