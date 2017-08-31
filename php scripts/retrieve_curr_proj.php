<?php

$empid =  $_POST["empid"];
require "logindetails.php";
$sql_query =	 "select * from currentproTable where empId = '$empid';";
$result = mysqli_query($con,$sql_query);

if (mysqli_num_rows($result)>0 ) {
$final = "{\"MainResult\":[";

$response["events"] = array();
while ($row = mysqli_fetch_array($result)) {
    // temp user array
 $currproj = array();
 
array_push( $currproj,
array(
 
 "name"=>$row[1],
 "currentProject"=>$row[2],
 "manager"=>$row[3],
 "deadline"=>$row[4],

 )
 );

$new = json_encode(array("result"=> $currproj));
$final = $final.$new."," ;

}
$final_json = substr($final, 0, -3);
echo $final_json."]}]}";

// success
//$response["success"] = 1;


}
else{
echo"sorry";
}
