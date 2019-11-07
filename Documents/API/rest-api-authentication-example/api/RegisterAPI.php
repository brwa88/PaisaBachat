<?php
header("Content-Type:application/json");
error_reporting(0);

 include('../conn.php');
$First_Name=$_GET['First_Name'];
$Middle_Name=$_GET['Middle_Name'];
$Last_Name=$_GET['Last_Name'];
$Gender=$_GET['Gender'];
$DOB=$_GET['DOB'];
$Email=$_GET['Email'];
$Password=$_GET['Password'];
$Phone=$_GET['Phone'];

$qu="insert into user_information values('','$First_Name','$Middle_Name','$Last_Name','$Gender','$DOB','','','$Email','$Password','$Phone')";
 $result = mysql_query($qu);


 response($result);

 mysql_close($conn);



function response($result)
{

 $response['Result']=$result;



 $json_response = json_encode($response);
echo $json_response;
}
?>