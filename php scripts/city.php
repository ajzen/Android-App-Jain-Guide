<?php
require "logindetails.php";
$phone_no =  $_POST["phone"];

$sql_query = "select City from loginDetails where Phone = '$phone_no';";
$result = mysql_query($con,$sql_query);

if(mysql_query(/4result)>0 ){
$city = $row["City"];
echo $city;

else{
echo "sorry";
}
