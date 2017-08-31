<?php
require "logindetails.php";
$name = $_POST["name"];
$phone = $_POST["phone_no"];
$email = $_POST["email"];
$passw = $_POST["password"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];


$sql = "insert into loginDetails values('$name','$phone','$email','$passw','$city','$state','$country','');";

if(mysqli_query($con,$sql)){
echo "<br><h3>one row inserted..........</h3>";
}
else{
echo "error in insertion...".mysqli_error($con);
}



?>