<html>
    <head>
        <title>Display Record</title>
        <style>
            body{
                background-color: lightblue;
            }
            table{
                background-color: white;
            }
        </style>
    </head>
</html>
<?php
include("db_connect.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0)
{
    ?>
    <h2 align="center"><mark>Displaying All Records</mark></h2>
    <center>
    <table border="3" cellspacing = "8" width = "85%">
        <tr>
            <th width="5%">ID</th>
            <th width="10%">First Name</th>
            <th width="10%">Last Name</th>
            <th width="10%">Gender</th>
            <th width="20%">Email</th>
            <th width="10%">Phone</th>
            <th width="25%">Address</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['address']."</td>
            </tr>
            ";
    }
}
else
{
    echo "No records found.";
}
?>
</table>
</center>
