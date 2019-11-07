<?php
error_reporting(0);




$First_Name=$_POST['First_Name'];
$Middle_Name=$_POST['Middle_Name'];
$Last_Name=$_POST['Last_Name'];
$Gender=$_POST['Gender'];
$DOB=$_POST['DOB'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Phone=$_POST['Phone'];



$url = "http://localhost/PaiseBachat/APIs/RegisterAPI.php?First_Name=".$First_Name.
"&Middle_Name=".$Middle_Name."&Last_Name=".$Last_Name."&Gender=".$Gender."&DOB=".
$DOB."&Email=".$Email."&Password=".$Password."&Phone=".$Phone;

 $client = curl_init($url);
 curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
 $response = curl_exec($client);

 $result = json_decode($response);

if( $result->Result==true)
{


header("Location: ../index.php");


}
else
{
session_start();
$_SESSION["invalid"]="Registration Failed";
header("Location: ../Register.php");
}


    ?>