<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WEB_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create student table
$sql = "CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Table creation failed! " . $conn->error;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Faculty</th>
                <th>Batch</th>
                <th>Contact</th>
                <th>DOB</th>
            </tr>
        </thead>
        <tbody>
            <?php
             while($student = mysqli_fetch_assoc(($students)));
            ?>
        </tbody>
    </table>
</body>
</html>