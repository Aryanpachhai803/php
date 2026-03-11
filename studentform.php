<?php

$stdname = null;
$stdaddress = null;
$stdbatch = null;
$stdemail = null;
$stdcontact = null;
if (isset($_POST['submit'])) {
    $stdname = $_POST['stdname'];
    echo $stdname ."<br>";

    $stdaddress = $_POST['stdaddress'];
    echo $stdaddress ."<br>";

    $stdgender = $_POST['stdgender'];
    echo $stdgender ."<br>";

    $stdbatch = $_POST['stdbatch'];
    echo $stdbatch ."<br>";

    $stdfaculty = $_POST['stdfaculty'];
    echo $stdfaculty ."<br>";

    $stdemail = $_POST['stdemail'];
    echo $stdemail ."<br>";

    $stdcontact = $_POST['stdcontact'];
    echo $stdcontact ."<br>";

    $stdDOB = $_POST['stdDOB'];
    echo $stdDOB ."<br>";
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Student Form</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        justify-content: center;
        text-align: center;
        height: 100vh;
        background-color: gray;
    }

    #container {
        background-color: white;
        padding: 30px 40px;
        border-radius: 20px;
        width: 300px;
        margin-top: 150px;
    }

    h1 {
        text-align: center;
        color: lightseagreen;
        padding-bottom: 20px;
    }

    label {
        font-weight: bold;

    }

    #btn {
        cursor: pointer;
        height: 30px;
        width: 100%;
        transition: 0.3s;
    }

    #btn:hover {
        color: white;
        background-color: lightblue;
    }
</style>

<body>
    <form method="POST" action="">
        <div id="container">
            <h1>Student Form</h1>
            <label for="stdname">Name</label>
            <input type="text" placeholder="Enter your name" id="stdname" name="stdname" required>
            <br><br>
            <label for="stdaddress">Address</label>
            <input type="text" placeholder="Enter your address" id="stdaddress" name="stdaddress" required>
            <br><br>
            <label for="stdgender">Gender</label>
            <input type="radio" name="stdgender" id="male" value="Male"> <label for="male">Male</label>
            <input type="radio" name="stdgender" id="female" value="Female"><label for="female">Female</label>
            <br><br>
            <label for="stdbatch">Batch</label>
            <input type="number" placeholder="Enter your batch" name="stdbatch" id="stdbatch" required>
            <br><br>
            <label for="stdfaculty">Faculty</label>
            <input type="radio" name="stdfaculty" id="BCA" value="BCA"><label for="BCA">BCA</label>
            <input type="radio" name="stdfaculty" id="BSCIT" value="BSCIT"><label for="BSCIT">BSCIT</label>
            <br><br>
            <label for="stdemail">Email</label>
            <input type="email" placeholder="Enter your email" name="stdemail" id="stdemail" required>
            <br><br>
            <label for="stdcontact">Contact</label>
            <input type="number" placeholder="Enter your number" name="stdcontact" id="stdcontact" required>
            <br><br>
            <label for="stdDOB">DOB</label>
            <input type="date" id="stdDOB" name="stdDOB" required>
            <br><br>
            <input type="submit" name="submit" id="btn">
        </div>
    </form>
</body>

</html>