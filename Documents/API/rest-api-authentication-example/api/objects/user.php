<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "user_information";//user_information
 
    // object properties
	public $User_ID;
    public $first_name;
	public $middle_name;
    public $last_name;
	public $gender;
	public $dob;
    public $email;
    public $password;
	public $phone;
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
 
// create() method will be here
// create new user record
function create(){
 
    
    $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );    
    // insert query
    $query = "INSERT INTO " . $this->table_name . "
            SET
                first_name = :first_name,
				middle_name = :middle_name,
                last_name = :last_name,
				gender = :gender,
                dob = :dob,
				email = :email,
                password = :password,
				phone = :phone";
				
 
    // prepare the query
    $stmt = $this->conn->prepare($query);
	
    // sanitize
    $this->first_name=htmlspecialchars(strip_tags($this->first_name));
	$this->middle_name=htmlspecialchars(strip_tags($this->middle_name));
    $this->last_name=htmlspecialchars(strip_tags($this->last_name));
	$this->gender=htmlspecialchars(strip_tags($this->gender));
    //$this->dob=htmlspecialchars(strip_tags($this->dob));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->password=htmlspecialchars(strip_tags($this->password));
 
    // bind the values
    $stmt->bindParam(':first_name', $this->first_name);
	$stmt->bindParam(':middle_name', $this->middle_name);
    $stmt->bindParam(':last_name', $this->last_name);
	$stmt->bindParam(':gender', $this->gender);
	$stmt->bindParam(':dob', $this->dob);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':phone', $this->phone);
    // hash the password before saving to database
    $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password_hash);
 
    // execute the query, also check if query was successful
    if($stmt->execute()){
        //echo($this->conn->errorInfo());
        return true;
    }
 
    return false;
}
 
// emailExists() method will be here
//////

// check if given email exist in the database
function emailExists(){
 
    // query to check if email exists
    $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $query = "SELECT User_ID, first_name, last_name, password
            FROM " . $this->table_name . "
            WHERE email = ?
            LIMIT 0,1";
    //echo $this->table_name;
    // prepare the query
    $stmt = $this->conn->prepare( $query );
 
    // sanitize
    $this->email=htmlspecialchars(strip_tags($this->email));
 
    // bind given email value
    $stmt->bindParam(1, $this->email);
 
    // execute the query
    $stmt->execute();
 
    // get number of rows
    $num = $stmt->rowCount();
 
    // if email exists, assign values to object properties for easy access and use for php sessions
    if($num>0){
 
        // get record details / values
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        // assign values to object properties
        $this->User_ID = $row['User_ID'];
        $this->first_name = $row['first_name'];
        $this->last_name = $row['last_name'];
        $this->password = $row['password'];
 
        // return true because email exists in the database
        return true;
    }
 
    // return false if email does not exist in the database
    return false;
}
 
// update() method will be here
}
?>