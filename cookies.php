<?php
$cookie_name = "Name";
$cookie_value = "Aryan";
$cookie_username = "Kemxo69";
setcookie($cookie_name,$cookie_value,time()+8600*10);
setcookie("Username",$cookie_username,time()+8600*10);
echo($_COOKIE[$cookie_name]);
echo($_COOKIE["Username"]);

setcookie("Username", null ,time()-8600*10);
setcookie($cookie_name. null , time()-8600*10)
?>