<?php
header("Content-Type:application/json");

 include('../conn.php');
$email=$_GET['email'];
$pass=$_GET['password'];

 $result = mysql_query("SELECT * FROM user_information where Email='$email' and Password='$pass';");

 while($row = mysql_fetch_array($result))
 {
 $User_ID = $row['User_ID'];
 $First_Name = $row['First_Name'];
 $Middle_Name = $row['Middle_Name'];


 $Last_Name = $row['Last_Name'];
 $Gender = $row['Gender'];
 $DOB = $row['DOB'];


  $F_Key = $row['F_Key'];
  $G_Key = $row['G_Key'];
 $Email = $row['Email'];

  $Password = $row['Password'];
   $Phone = $row['Phone'];


 response($User_ID, $First_Name, $Middle_Name,$Last_Name, $Gender, $DOB, $F_Key, $G_Key,$Email, $Password,$Phone);
 }
 mysql_close($conn);



function response($User_ID, $First_Name, $Middle_Name,$Last_Name, $Gender, $DOB, $F_Key, $G_Key,$Email, $Password,$Phone)
{

 $response['User_ID']=$User_ID;
  $response['First_Name']=$First_Name;
   $response['Middle_Name']=$Middle_Name;
    $response['Last_Name']=$Last_Name;
     $response['Gender']=$Gender;
      $response['DOB']=$DOB;
       $response['F_Key']=$F_Key;
       $response['G_Key']=$G_Key;
       $response['Email']=$Email;
       $response['Password']=$Password;
       $response['Phone']=$Phone;

 $json_response = json_encode($response);
echo $json_response;
}
?>