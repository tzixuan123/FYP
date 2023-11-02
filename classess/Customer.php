<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Formate.php');

?>


<?php

class Customer{
	
private $db;
private $fm;

	public function __construct()
	{
		
		$this->db = new Database();
		$this->fm = new Format();
	}
public function customerRegistration($data){

$name = mysqli_real_escape_string($this->db->link, $data['name']);
$address = mysqli_real_escape_string($this->db->link, $data['address']);
$country = mysqli_real_escape_string($this->db->link, $data['country']);
$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
$email = mysqli_real_escape_string($this->db->link, $data['email']);
$pass = mysqli_real_escape_string($this->db->link, md5($data['pass']));

// Registration Form
if ($name == "" || $address == "" || $country =="" ||$phone == "" || $email == "" || $pass == "") {
	
	$msg = "<span class='error'>Fields must not be empty !</span>";
	return $msg;
}

  $mailquery = "SELECT * FROM tbl_customer WHERE email = '$email' LIMIT 1";
  $mailchk = $this->db->select($mailquery);
  if ($mailchk != false) {
  	$msg = "<span class='error'>Email already exist !</span>";
	return $msg;
  }else{


  	 $query = "INSERT INTO tbl_customer(name,address,country,phone,email,pass) VALUES('$name','$address','$country','$phone','$email','$pass')";

	 $inserted_row = $this->db->insert($query);
			if ($inserted_row) {
				header("Location:login.php");
			} else{
				$msg = "<span class='error'>Email or Password not matched!!</span>";
				return $msg;
		}
  }
}
// Login Form 
public function customerLogin($data){
$email = mysqli_real_escape_string($this->db->link, $data['email']);
$pass = mysqli_real_escape_string($this->db->link, md5($data['pass']));
if (empty($email) || empty($pass)) {
$msg = "<span class='error'>Fields must not be empty !</span>";
	return $msg;
}
$query = "SELECT * FROM tbl_customer WHERE email = '$email' AND pass = '$pass'";
$result = $this->db->select($query);
if ($result != false) {
	$value = $result->fetch_assoc();
	Session::set("cuslogin",true);
	Session::set("cmrId",$value['id']);
	Session::set("cmrName",$value['name']);
	header("Location:home.php");

}else{
	$msg = "<span class='error'>Email or Password not matched !</span>";
				return $msg;
}
}


// Edit Profile Function /// 
public function getCustomerData($id){
	$query = "SELECT * FROM tbl_customer WHERE id = '$id'";
		$result = $this->db->select($query);
		return $result;
}

public function customerUpdate($data,$cmrId){

$name = mysqli_real_escape_string($this->db->link, $data['name']);
$address = mysqli_real_escape_string($this->db->link, $data['address']);
$country = mysqli_real_escape_string($this->db->link, $data['country']);
$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
$email = mysqli_real_escape_string($this->db->link, $data['email']);


if ($name == "" || $address == "" || $country == "" || $phone == "" || $email == "") {
	
	$msg = "<span class='error'>Fields must not be empty !</span>";
	return $msg;
}else{


  	 $query = "INSERT INTO tbl_customer(name,address,country,phone,email) VALUES('$name','$address','$country','$phone','$email',)";

	$query = "UPDATE tbl_customer

	SET
	name = '$name',
	address = '$address', 
	country = '$country', 
	phone = '$phone', 
	email = '$email' 

	WHERE id = '$cmrId'";

	$updated_row = $this->db->update($query);
	if ($updated_row) {
		$msg = "<span class='success'>Profile Updated Successfully.</span>";
				return $msg;
	} else{
			$msg = "<span class='error'>Profile Data Not Updated !</span>";
				return $msg;
	}
  }
}

}


?>