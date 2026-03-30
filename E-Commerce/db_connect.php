<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="ecommercedb";

    $conn = mysqli_connect($servername, $username, $password,$dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo "<h1 style='color:white'>Connected</h1>";
    }
?>   