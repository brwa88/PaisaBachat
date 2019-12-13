<?php
header("Content-Type:application/json");

 include('../conn.php');






$query="SELECT * FROM items where Verified=1 order by Item_ID DESC;";


 $result=mysql_query($query);
$jsonText="";

 while($row = mysql_fetch_array($result))
 {
 $Item_ID = $row['Item_ID'];
 $Item_Name = $row['Item_Name'];
 $Catagory_Fkey = $row['Catagory_Fkey'];


 $Price = $row['Price'];
 $Sold = $row['Sold'];
 $Post_Date = $row['Post_Date'];

  $Images = $row['Images'];
  $Description = $row['Description'];
  $Verified = $row['Verified'];


response($Item_ID, $Item_Name, $Catagory_Fkey,$Price, $Sold, $Post_Date,$Images, $Description, $Verified);


 }
 mysql_close($conn);



function response($Item_ID, $Item_Name, $Catagory_Fkey,$Price, $Sold, $Post_Date,$Images, $Description, $Verified)
{


 $response['Item_ID']=$Item_ID;
  $response['Item_Name']=$Item_Name;
   $response['Catagory_Fkey']=$Catagory_Fkey;
    $response['Price']=$Price;
     $response['Sold']=$Sold;
      $response['Post_Date']=$Post_Date;
       $response['Description']=$Description;
        $response['Images']=$Images;
       $response['Verified']=$Verified;


 $json_response = json_encode($response);
echo $json_response;
}
?>