<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost/rest-api-authentication-example/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// database connection will be here
// files needed to connect to database
include_once 'config/database.php';
include_once 'objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// instantiate product object
$user = new User($db);
 
// submitted data will be here
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// set product property values
echo "Hello";
$user->first_name = $data->first_name;
$user->middle_name = $data->middle_name;
$user->last_name = $data->last_name;
$user->gender = $data->gender;
$user->dob = $data->dob;
$user->email = $data->email;
$user->password = $data->password;
$user->phone = $data->phone;
 
// use the create() method here
// create the user
if(
    !empty($user->first_name) &&
    !empty($user->email) &&
    !empty($user->password) &&
	!empty($user->dob) &&
    !empty($user->gender) &&
    !empty($user->phone) &&
    $user->create()
){
 
    // set response code
    http_response_code(200);
 
    // display message: user was created
    echo json_encode(array("message" => "User was created."));
}
 
// message if unable to create user
else{
	echo($user->create());
    // set response code
    http_response_code(400);
 
    // display message: unable to create user
    echo json_encode(array("message" => "Unable to create user."));
}
?>