<?php

$phone_no =  $_GET["phone"];
require "logindetails.php";
$sql_query = "select * from favourites where PhoneNum = '$phone_no';";
$result = mysqli_query($con,$sql_query);

if (mysqli_num_rows($result)>0 ) {
$final = "{\"MainResult\":[";

$response["temples"] = array();
while ($row = mysqli_fetch_array($result)) {
    // temp user array
 $Temple = array();

array_push( $Temple,
array(
 
 "TempleName"=>$row[1],
 "TempleAddress"=>$row[2],
 "TempleLat"=>$row[3],
 "TempleLng"=>$row[4]
 )
 );

$new = json_encode(array("result"=>$Temple));
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
