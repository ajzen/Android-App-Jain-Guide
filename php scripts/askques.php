<?php
require "logindetails.php";

$phone = $_POST["phone_no"];

$Question = $_POST["Question"];

$sql = "insert into questions values('','$phone','$Question','')";

if(mysqli_query($con,$sql)){
echo "<br><h3>one row inserted..........</h3>";
}
else{
echo "error in insertion...".mysqli_error($con);
}



?>