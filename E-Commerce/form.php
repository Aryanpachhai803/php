<?php
include("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: lightblue;
            padding: 0 10px;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background-color: white;
            margin: 20px auto;
            padding: 30px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        .container .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: black;
            text-transform: uppercase;
            text-align: center;
        }

        .container .form {
            width: 100%;
        }

        .container .form .input_section {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .container .form .input_section label {
            width: 180px;
            margin-right: 15px;
            font-size: 16px;
        }

        .container .form .input_section .input,
        .container .form .input_section textarea {
            width: 100%;
            outline: none;
            border: 1px solid black;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 5px;
        }

        .container .form .input_section textarea {
            resize: none;
            height: 80px;
        }

        .container .form .input_section .selectbox {
            position: relative;
            width: 100%;
            height: 50px;
            border: 1px solid black;
            -webkit-appearance: none;
            appearance: none;
            border-radius: 5px;
            padding: 0 10px;
            outline: none;
        }

        .container .form .input_section .input:focus,
        .container .form .input_section textarea:focus,
        .container .form .input_section .selectbox:focus {
            border: 1px solid rgb(251, 26, 41);
        }

        .container .form .input_section p {
            font-size: 15px;
            color: #757575;
        }

        .container .form .input_section .check {
            width: 15px;
            height: 20px;
            position: relative;
            display: block;
            cursor: pointer;
        }

        .container .form .input_section .reg-btn {
            width: 100%;
            padding: 10px 10px;
            font-size: 15px;
            border: 0;
            background-color: rgb(15, 125, 251);
            border-radius: 5px;
            color: white;
            outline: none;
            cursor: pointer;
        }

        .container .form .input_section:last-child {
            margin-bottom: 0;
        }

        .container .form .input_section .reg-btn:hover {
            background: rgb(4, 63, 212);
        }

        @media(max-width: 400px) {
            .container .form .input_section {
                flex-direction: column;
                align-items: flex-start;
            }

            .container .form .input_section label {
                margin-bottom: 5px;
            }

            .container .form .input_section.terms {
                flex-direction: row;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>

            <div class="form">
                <div class="input_section">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>

                <div class="input_section">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>

                <div class="input_section">
                    <label>Password</label>
                    <input type="password" class="input" name="password" required>
                </div>

                <div class="input_section">
                    <label>Confirm Password</label>
                    <input type="password" class="input" name="confpassword" required>
                </div>

                <div class="input_section">
                    <label>Gender</label>
                    <select class="selectbox" name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="input_section">
                    <label>Email Address</Address></label>
                    <input type="email" class="input" name="email" required>
                </div>

                <div class="input_section">
                    <label>Phone Number</label>
                    <input type="text" class="input" name="phone" required>
                </div>

                <div class="input_section">
                    <label>Address</label>
                    <textarea name="address" required></textarea>
                </div>

                <div class="input_section terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="Checkmark"></span>
                    </label>
                    <p>I agree to terms and condition.</p>
                </div>

                <div class="input_section">
                    <input type="submit" value="Register" class="reg-btn" name="register">
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['confpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO form (fname,lname,password,cpassword,gender,email,
        phone,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data Inserted into Database";
    } else {
        echo "Failed";
    }
}
?>