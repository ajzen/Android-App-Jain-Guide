<?php
require "logindetails";
$user_name = $_POST["login_name"];
$user_pass = $_POST["login_pass"];

$sql_query= "select name from loginDetails where `name like '$user_name' and password like '$user_pass';";

$reult = mysqli_query($con,$sql_query);

if(mysqli_num_rows($reslut)>0 ){
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
echo "Login Success.. Welcome ".$name;

}
else{
echo"Either Email or Password is Wrong! Try Again..";

}