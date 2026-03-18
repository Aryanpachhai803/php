<?php
// $db_server = "localhost";
// $db_user = "root";
// $db_password = "";
// $db_name = "studentdb";
// $connection = "";

// try{
// $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
// }
// catch(mysqli_sql_exception){
//   echo "Could not connect!";
// }

// if($connection){
//   echo "You are connected!";
// }

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE WEB_DB";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Database creation failed! " . $conn->error;
}

// Close connection
$conn->close();
?>