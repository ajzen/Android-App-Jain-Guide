<?php
require "logindetails.php";

$sql_query = "selectloginDetails.Name,Answers.Q_id,Answers.A_id,Answers.PhoneNum,Answers.Answers from Answers join loginDetails  where loginDetails.Phone=Answers.PhoneNum;";
$result = mysqli_query($con,$sql_query);

if (mysqli_num_rows($result)>0 ) {
$final = "{\"MainResult\":[";

$response["query"] = array();
while ($row = mysqli_fetch_array($result)) {
    // event user array
 $Query = array();

array_push( $Query,
array(
 
 "question"=>$row[0]

 
 )
 );

$new = json_encode(array("result"=> $Query));
$final = $final.$new."," ;

}
$final_query = substr($final, 0, -3);
echo $final_query."]}]}";

}
else{
echo"sorry";
}



