<?php

$empid =  $_POST["empid"];
require "logindetails.php";
$sql_query =	 "select * from currentproTable where empId = '$empid';";
$res = mysqli_query($con,$sql_query);

$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array("name"=>$row[1],
 "currentProject"=>$row[2],
 "manager"=>$row[3],
 "deadline"=>$row[4]
));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);

?>