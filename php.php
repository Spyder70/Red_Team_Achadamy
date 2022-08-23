<?php
session_start();
echo"Wlcome to the world<br>";
$username=$_SESSION['USER_NAME'];
$time=$_SESSION['USER_LOGIN_TIME'];
$result = $time . ' ' . $username;
setcookie("cat",$result,time()+86400,"/");
echo"The cookie is set</br>"
?>