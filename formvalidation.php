
<!-- // $username = null;
// if (isset($_POST['submit'])) {
//     $username = $_POST['username'];

//     echo $username;
// } -->
<!-- 
<!DOCTYPE HTML>
<html>

<head>
    <title>Form Validation</title>
</head>

<body>
    <form method="POST" action="#">
        <label for="username"> Username </label>
        <input type="text" placeholder="Enter Username" id="username" name="username" required>
        <input type="submit" name="submit" />
    </form>
</body>

</html> -->



<?php
    include "db_connect.php";

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $batch = $_POST['batch'];
        $faculty = $_POST['faculty'];
        $contact = $_POST['contact'];
        $dob = $_POST['dob'];

        $valid_datas = TRUE;


        if(!preg_match("/^[a-zA-Z0-9@._$#*-]{5,}/m", $username) && strlen($username) > 20)
        {
            echo "<h3 style='color:red'>Invalid username</h3>";
            $valid_datas = FALSE;
        }

        if(!preg_match("/[a-zA-Z0-9._$#*-]{3,}@[a-zA-Z]{3,}.[a-zA-Z]{3,}/m", $email) && strlen($email) > 30)
        {
            echo "<h3 style='color:red'>Invalid Email</h3>";
            $valid_datas = FALSE;
        } 

        if(($address == null || $address == " ") && strlen($address) > 50 ){
            echo "<h3 style='color:red'>Invalid Address</h3>";
            $valid_datas = FALSE;
        }

        if(!in_array($gender,["male","female","others"])){
            echo "<h3 style='color:red'>Invalid Gender</h3>";
            $valid_datas = FALSE;
        }

        if(!in_array($batch,["2080","2081","2079"])){
            echo "<h3 style='color:red'>Invalid Batch</h3>";
            $valid_datas = FALSE;
        }

        if(!in_array($faculty,["bca","csit"])){
            echo "<h3 style='color:red'>Invalid Faculty</h3>";
            $valid_datas = FALSE;
        }

        if(!preg_match("/^\+977-(98|97)[0-9]{8}$/",$contact)){
            echo "<h3 style='color:red'>Invalid Contact</h3>";
            $valid_datas = FALSE;

        }

        if($valid_datas){
            $query = "INSERT INTO `students` 
                        (`username`, `email`, `address`, `gender`, `batch`, `faculty`, `contact`, `dob`) 
                        VALUES ('$username', '$email', '$address', '$gender', '$batch', '$faculty', '$contact', '$dob');";
    
            $result = mysqli_query($conn, $query);
    
            if($result){
                // code to execute after data inserted on table
            } else {
                // code to execute after failure of data insertion
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Form</title>

<style>
body{ 
     background:black; 
}

.form-container{
    width:400px;
    margin:40px auto;
    padding:20px;
    background:white;
    border-radius:8px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h1{
    text-align:center;
}

label{
    display:block;
    margin-top:10px;
}

input[type="text"],
input[type="email"],
input[type="date"],
select{
    width:100%;
    padding:6px;
    margin-top:4px;
}

.radio{
    margin-top:5px;
}

.radio input{
    width:auto;
}

.radio label{
    display:inline;
    margin-right:15px;
}

.submit{
    margin-top:15px;
    width:100%;
    background:green;
    color:white;
    border:none;
    padding:10px;
    cursor:pointer;
    border-radius:5px;
    font-size:16px;
}



</style>
</head>

<body>

<div class="form-container">

<h1>Student Details Form</h1>

<form method="POST" action="#">

<label>Username:</label>
<input type="text" name="username" required >

<label>Email:</label>
<input type="email" name="email" required >

<label>Address:</label>
<input type="text" name="address" required>

<label>Gender:</label>
<div class="radio" required>
<input type="radio" name="gender" value="male" > <label>Male</label>
<input type="radio" name="gender" value="female"> <label>Female</label>
<input type="radio" name="gender" value="others"> <label>Others</label>
</div>

<label>Batch:</label>
<select name="batch" required >
<option name="batch" value="">Select Batch</option>
<option name="batch" value="2081">2081</option>
<option name="batch" value="2080">2080</option>
<option name="batch" value="2079">2079</option>
</select>

<label>Faculty:</label>
<div class="radio" required>
<input type="radio" name="faculty" value="bca" > <label>BCA</label>
<input type="radio" name="faculty" value="csit"> <label>CSIT</label>
</div>

<label>Contact:</label>
<input type="text" name="contact" required >

<label>DOB:</label>
<input type="date" name="dob" required >

<input class="submit" type="submit" name="submit" value="Submit">

</form>

</div>
</body>
</html>