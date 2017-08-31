<?php

$user = "u825349078";
$password = "abhidude2212";
$host = "mysql.hostinger.in";
$dbname = "u825349078_data";


$con = mysql_connect($host,$user,$password,$dbname);

if(!$con){
die{"error in connection" . mysql_connect_error()};
}
else {
echo "<br><h3>Connection success...</h3>";
}




?>