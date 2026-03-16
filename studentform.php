<?php
if (isset($_POST['submit'])) {

    $stdname = $_POST['stdname'];
    $stdaddress = $_POST['stdaddress'];
    $stdgender = isset($_POST['stdgender']) ? $_POST['stdgender'] : "";
    $stdbatch = $_POST['stdbatch'];
    $stdfaculty = isset($_POST['stdfaculty']) ? $_POST['stdfaculty'] : "";
    $stdemail = $_POST['stdemail'];
    $stdcontact = $_POST['stdcontact'];
    $stdDOB = $_POST['stdDOB'];

    if (!preg_match("/^[a-zA-Z0-9@._$#*-]{5,}/m", $stdname)) {
        echo "<h3>Invalid student name</h3>";
    } else {
        echo "Name: $stdname <br>";
    }

    if ($stdaddress == null || $stdaddress == " ") {
        echo "<h3>Invalid Address</h3>";
    } else {
        echo "Address: $stdaddress <br>";
    }

    if ($stdgender != "Male" && $stdgender != "Female") {
        echo "<h3>Invalid Gender</h3>";
    } else {
        echo "Gender: $stdgender <br>";
    }

    if (!preg_match("/^[0-9]{4}/m", $stdbatch)) {
        echo "<h3>Invalid Batch Number</h3>";
    } 
    else {
        echo "Batch: $stdbatch <br>";
    }

    if ($stdfaculty != "BCA" && $stdfaculty != "BCSIT") {
        echo "<h3>Invalid Faculty</h3>";
    } else {
        echo "Faculty: $stdfaculty <br>";
    }

    if (!preg_match("/^[a-zA-Z0-9]{3,}@[a-zA-Z]{3,}.[a-zA-Z]{2,}/m", $stdemail)) {
        echo "<h3>Invalid Email</h3>";
    } else {
        echo "Email: $stdemail <br>";
    }

    if (!preg_match("/^[0-9]{10}$/", $stdcontact)) {
        echo "<h3>Invalid Contact Number</h3>";
    } else {
        echo "Contact: $stdcontact <br>";
    }

    echo "DOB: $stdDOB <br>";

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
        display: inline-block;
        font-weight: bold;
        text-align: left;
        width: 90px;
    }

    #genderStd {
        width: 5px;
    }

    #facultyStd {
        width: 5px;
    }

    input {
        width: 150px;
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
            <input type="text" placeholder="Enter your name" id="stdname" name="stdname">
            <br><br>
            <label for="stdaddress">Address</label>
            <input type="text" placeholder="Enter your address" id="stdaddress" name="stdaddress">
            <br><br>
            <label for="stdgender">Gender</label>
            <input type="radio" name="stdgender" id="male" value="Male"> <label for="male" id="genderStd">Male</label>
            <input type="radio" name="stdgender" id="female" value="Female"><label for="female"
                id="genderStd">Female</label>
            <br><br>
            <label for="stdbatch">Batch</label>
            <input type="number" placeholder="Enter your batch" name="stdbatch" id="stdbatch">
            <br><br>
            <label for="stdfaculty">Faculty</label>
            <input type="radio" name="stdfaculty" id="BCA" value="BCA"><label for="BCA" id="facultyStd">BCA</label>
            <input type="radio" name="stdfaculty" id="BSCIT" value="BSCIT"><label for="BSCIT"
                id="facultyStd">BSCIT</label>
            <br><br>
            <label for="stdemail">Email</label>
            <input type="email" placeholder="Enter your email" name="stdemail" id="stdemail">
            <br><br>
            <label for="stdcontact">Contact</label>
            <input type="number" placeholder="Enter your number" name="stdcontact" id="stdcontact">
            <br><br>
            <label for="stdDOB">DOB</label>
            <input type="date" id="stdDOB" name="stdDOB">
            <br><br>
            <input type="submit" name="submit" id="btn">
        </div>
    </form>
</body>

</html>