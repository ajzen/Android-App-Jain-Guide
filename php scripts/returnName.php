<?php
require "logindetails.php";
$phone_no =  $_POST["phone"];

$sql_query = "select Name from loginDetails where Phone = '$phone_no';";
$result = mysqli_query($con,$sql_query);

if(mysqli_num_rows($result)>0 ){
$row = mysqli_fetch_assoc($result);
$Name = $row["City"];
echo $Name
}
else{
echo "sorry";
}
