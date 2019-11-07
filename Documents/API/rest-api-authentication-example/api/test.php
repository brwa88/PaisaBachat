<?php
header("Content-Type:application/json");


$email=$_GET['email'];
$pass=$_GET['password'];




 response($email, $pass);





function response($Email, $Password)
{


       $response['Email']=$Email;
       $response['Password']=$Password;


 $json_response = json_encode($response);
echo $json_response;
}
?>