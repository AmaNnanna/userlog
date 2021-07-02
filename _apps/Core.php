<?php

//Write your custome class/methods here
namespace Apps;

class Core extends Model
{


	/** @return exit  */
	public function __construct()
	{
		parent::__construct();
	}



	public function CreateAccount($fullName,$emailAddress,$phoneNumber,$loginPassword,$gender)
	{
		$added =  mysqli_query($this->dbCon, "INSERT INTO registrationform(fullname, emailAddress, phoneNumber, loginPassword, gender) VALUES ('$fullName','$emailAddress','$phoneNumber','$loginPassword','$gender')");
		// $this->debug($added);
		return $added;
	}



	public function UserLogin($emailAddress, $loginPassword)
	{
		$login = mysqli_query($this->dbCon, "SELECT * FROM `registrationform` WHERE emailAddress='$emailAddress' AND loginPassword='$loginPassword'");
		$row = mysqli_fetch_object($login);
		return $row;
	}
	
	public function GetUser($id)
	{
		$login = mysqli_query($this->dbCon, "SELECT `id`, `fullName`, `emailAddress`, `phoneNumber`, `gender` FROM `registrationform` WHERE id='$id'");
		$row = mysqli_fetch_object($login);
		return $row;
	}

	
	// public function Getregistered()
	// {                                       	
	// 	$getmembers = mysqli_query($this->dbCon, "SELECT *  FROM registrationform ");
	// 	return $getmembers;
	// }

}
