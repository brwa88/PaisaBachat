<?php
error_reporting(0);




 $email = $_POST['email'];
$pass = $_POST['password'];



$url = "http://localhost/PaiseBachat/APIs/LoginAPI.php?email=".$email."&password=".$pass;

 $client = curl_init($url);
 curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
 $response = curl_exec($client);

 $result = json_decode($response);

if( $result->Email==$email&& $result->Password==$pass)
{


session_start();
 $_SESSION['User_ID']=$result->User_ID;
  $_SESSION['First_Name']=$result->First_Name;
   $_SESSION['Middle_Name']=$result->Middle_Name;
    $_SESSION['Last_Name']=$result->Last_Name;
     $_SESSION['Gender']=$result->Gender;
      $_SESSION['DOB']=$result->DOB;
       $_SESSION['F_Key']=$result->F_Key;
       $_SESSION['G_Key']=$result->G_Key;
       $_SESSION['Email']=$result->Email;
       $_SESSION['Password']=$result->Password;
       $_SESSION['Phone']=$result->Phone;






header("Location: ../index.php");


}
else
{
session_start();
$_SESSION["invalid"]="Invalid Credentials";
header("Location: ../login.php");
}


    ?>