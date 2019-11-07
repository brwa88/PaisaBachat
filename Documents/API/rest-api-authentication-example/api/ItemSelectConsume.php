<?php


session_start();


$UserID=$_SESSION['User_ID'];



$url = "http://localhost/PaiseBachat/APIs/ItemSelect.php?UserID=".$UserID;

 $client = curl_init($url);
 curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
 $response = curl_exec($client);

  $response=str_replace("}","},",$response);
  $response=substr_replace($response,"",-1);
$response="[".$response."]";
 $result= json_decode($response);

echo '<table style="width: 100%" class="table">';


 echo '<tr>
      <th scope="col">Item ID</th>
      <th scope="col">Item Name</th>
      <th scope="col">Catagory</th>
      <th scope="col">Price</th>
      <th scope="col">Sold</th>
      <th scope="col">Post Date</th>
         <th scope="col">Description</th>
         <th scope="col">Verified</th>

    </tr>';

foreach($result as $result) {
echo '<tr>';


echo '<td scope="col">';
    echo $result->Item_ID;
echo '</td>';

echo '<td scope="col">';
    echo $result->Item_Name;
echo '</td>';

echo '<td scope="col">';
    echo $result->Catagory_Fkey;
echo '</td>';

echo '<td scope="col">';
    echo $result->Price;
echo '</td>';

echo '<td scope="col">';
    echo $result->Sold;
echo '</td>';

echo '<td scope="col">';
    echo $result->Post_Date;
echo '</td>';

echo '<td scope="col">';
    echo $result->Description;
echo '</td>';

echo '<td scope="col">';
    echo $result->Verified;
echo '</td>';


    echo '</tr>';
}

echo '</table>';
    ?>