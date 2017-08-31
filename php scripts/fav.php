<?php
require "logindetails.php";
$phone_no =  $_POST["phone"];
$sql_query = "select * from loginDetails where Phone = '$phone_no';";
$result = mysqli_query($con,$sql_query);


if (mysqli_num_rows($result) > 0) {
$response["temples"] = array();

while ($row = mysql_fetch_array($result)) {
    // temp user array
    $Temple = array();
    $Temple ["TempleName"] = $row["TempleName"];
    $Temple ["TempleAddress"] = $row["TempleAddress"];
    $Temple ["TempleLat"] = $row["TempleLat"];
    $Temple ["TempleLng"] = $row["TempleLng"];
   


    // push single Temple into final response array
    array_push($response["temples"], $Temple);
}

// success
$response["success"] = 1;