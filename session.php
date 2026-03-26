<?php
 session_start();
 $_SESSION["name"] = "Aryan";
 $_SESSION["Username"] = "Kemxo69";
 
 echo $_SESSION["name"];

//  session_unset();
//  session_destroy();
 unset($_SESSION["name"]);
 
 echo $_SESSION["name"];
 echo $_SESSION["Username"];
?>