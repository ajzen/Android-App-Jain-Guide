<?php
require "logindetails.php";
$TempleName = $_POST["TempleName"];
$Address = $_POST["Address"];
$Phone = $_POST["Phone"];
$Image = $_POST["Image"];
$City = $_POST["City"];
$State = $_POST["State"];
$Country = $_POST["Country"];


$sql = "insert into newtemplesvalues('$TempleName','$Address','$Phone','$Image','$City','$State','$Country');";

if(mysqli_query($con,$sql)){
echo "Temple inserted..........";
}
else{
echo "error in insertion...".mysqli_error($con);
}



?>