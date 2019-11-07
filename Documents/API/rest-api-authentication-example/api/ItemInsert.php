<?php
header("Content-Type:application/json");



 include('../conn.php');

$UserID=$_GET['UserID'];
$ItemName=$_GET['ItemName'];
$Catagory=$_GET['Catagory'];
$Price=$_GET['Price'];
$Sold=$_GET['Sold'];
$Images=$_GET['Images'];


$Description=$_GET['Description'];


$qu="insert into items values('','$ItemName',$Catagory,$Price,$Sold,DEFAULT,$Images,'$Description',$UserID,0)";

 $result = mysql_query($qu);


 response($result);

 mysql_close($conn);



function  response($result)
{

 $response['Result']=$result;


$json_response = json_encode($response);

echo $json_response;
}
?>