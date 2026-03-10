<?php
$username = null;
if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    echo $username;
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Form Validation</title>
</head>

<body>
    <form method="POST" action="#">
        <label for="username"> Username </label>
        <input type="text" placeholder="Enter Username" id="username" name="username">
        <input type="submit" name="submit" />
    </form>
</body>

</html>