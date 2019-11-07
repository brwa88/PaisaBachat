<?php

error_reporting(0);
include('../conn.php');

$ItemName=$_POST['ItemName'];
$Catagory=$_POST['Catagory'];
$Price=$_POST['Price'];
$Sold=$_POST['Sold'];


$Image1=base64_encode(file_get_contents($_FILES['Image1']['tmp_name']));
$Image2=base64_encode(file_get_contents($_FILES['Image2']['tmp_name']));
$Image3=base64_encode(file_get_contents($_FILES['Image3']['tmp_name']));
$Image4=base64_encode(file_get_contents($_FILES['Image4']['tmp_name']));

session_start();

$UserID=$_SESSION['User_ID'];



$Description=$_POST['Description'];

$qu1="insert into image values('','$Image1','$Image2','$Image3','$Image4')";

mysql_query($qu1);

$qu2="select * from image";

$r=mysql_query($qu2);
$Images=0;
while($re=mysql_fetch_array($r))
{
$Images=$re['Images_ID'];
}

//echo '<img src="data:image/png;base64,'.$Image3.'">';


if($Sold=="")
{
$Sold=0;
}
else
{
$Sold=1;
}



$url = "http://localhost/PaiseBachat/APIs/ItemInsert.php?ItemName=".$ItemName.
"&Catagory=".$Catagory."&Price=".$Price."&Sold=".$Sold."&Description=".$Description.
"&UserID=".$UserID."&Images=".$Images;
//echo $url;

$client = curl_init($url);
 curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
 $response = curl_exec($client);

 $result = json_decode($response);

 echo $result->Result;
 echo $result->ItemName;
  echo $result->Catagory;
   echo $result->Price;
    echo $result->Sold;
     echo $result->Description;
     echo $result->UserID;

if( $result->Result==true)
{


header("Location: ../My Items.php");


}
else
{
echo 'no';
}


    ?>




