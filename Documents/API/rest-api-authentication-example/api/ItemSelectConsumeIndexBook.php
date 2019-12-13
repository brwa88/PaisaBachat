<?php






$url = "http://localhost/PaiseBachat/APIs/ItemSelectIndexBook.php";

 $client = curl_init($url);
 curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
 $response = curl_exec($client);

  $response=str_replace("}","},",$response);
  $response=substr_replace($response,"",-1);
$response="[".$response."]";
 $result= json_decode($response);



foreach($result as $result) {

$name=$result->Item_Name;
$price=$result->Price;
$Catagory_Fkey=$result->Catagory_Fkey;

if($Catagory_Fkey==2)
{
echo '		<div class="product">
							<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
							<div class="product_extra product_new"><a href="categories.html">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">'.$name.'</a></div>
								<div class="product_price">$'.$price.'</div>
							</div>
						</div>';
}
if($Catagory_Fkey==6)
{
echo '		<div class="product">
							<div class="product_image"><img src="images/product_1.jpg" alt=""></div>
							<div class="product_extra product_new"><a href="categories.html">New</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php">'.$name.'</a></div>
								<div class="product_price">$'.$price.'</div>
							</div>
						</div>';
}

/*
    echo $result->Item_ID;



    echo $result->Item_Name;



    echo $result->Catagory_Fkey;

    echo $result->Price;

    echo $result->Sold;

    echo $result->Post_Date;
 echo $result->Images;
    echo $result->Description;

    echo $result->Verified;



*/
}


    ?>