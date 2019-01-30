<?php
require_once 'database.php';


class RegistrationModel extends Connection {

	public function registerUser($uName,$uAddress,$uContact1,$uContact2,$uChildName,$uChildDate,$uGender,$uEmail,$password){
		$query = "INSERT into users values(null,'".$uName."','".$uAddress."','".$uContact1."','".$uContact2."','".$uChildName."','".$uChildDate."','".$uGender."','".$uEmail."','".$password."', NULL)";
		
		if(mysqli_query($this->con,$query)==true){
		//	echo "<script>alert('User.$username.registered!');</script>";
			return 1;
		}else{
			return 0;
		}
	}

	public function checkEmail($uEmail){
		$query = "select uID from users where uEmail='".$uEmail."'";
		$result = mysqli_query($this->con,$query); //checking for the return of object from database

		if($result->num_rows>0){
			// echo "found"; 
			// echo "<script>window.alert('Email exists!')</script>";

			return 1;
		}else{
			// echo "not found";
			return 0;
			
		}
	}

	public function checkPassword($uEmail,$password){
		$query = "select * from users where uEmail='".$uEmail."' and password='".$password."'";
		$result = mysqli_query($this->con,$query);
		if($result->num_rows==1){
			//echo "found";
			while($row=$result->fetch_assoc()){
				//echo $row['uID'].$row['uEmail'].$row['uName'];
				// return $row['uName']; //returns user name to controller
				$user = [
					'uID' =>$row['uID'],
					'uName' =>$row['uName'],
					'uAddress' =>$row['uAddress'],
					'uContact1' =>$row['uContact1'],
					'uContact2' =>$row['uContact2'],
					'uChildName' =>$row['uChildName'],
					'uChildDate' =>$row['uCbirthdate'],
					'uGender' =>$row['uGender'],
					'uEmail' => $row['uEmail'],
					'password' => $row['password']
					
				];
				return $user;
			}
			
			// echo "<script>window.alert(Username and password found)</script>";
		}else{
			//echo "not found";
			return null;
			// echo "<script>window.alert(Username or password not found!)</script>";
		}

	}

	public function updateUser($uName,$uAddress,$uContact1,$uContact2,$uChildName,$uChildDate,$uGender,$uEmail,$password){
		$query = "update users set uName='".$uName."',uAddress='".$uAddress."',uContact1='".$uContact1."',uContact2='".$uContact2."',uChildName='".$uChildName."',uCbirthdate='".$uChildDate."',uGender='".$uGender."',password='".$password."' where uEmail='".$uEmail."'";
		if(mysqli_query($this->con,$query)==true){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function deleteUser($uID){
		$query = "delete from users where uID=".$uID;
		if(mysqli_query($this->con,$query)==true){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function newsletter($uID){
		$query = "insert into newsletter values (null,'".$uID."')";
		if(mysqli_query($this->con,$query)==true){
			echo "success";
			return 1;
		}
		else{
			return 0;
		}
	}


}

 // $var = new RegistrationModel();
 // $var->newsletter(23);
 // $var->checkPassword('test4@test.com','86985e105f79b95d6bc918fb45ec7727');
 // echo 'tezt';
 // echo $user['uName'];
 // echo $user['uChildDate'];

 // if($var->checkEmail('test@test.com')==0){
 // 	$var->registerUser('test','test','test','test','test','01-20-2012','Male','test@test.com','test');
 // 	echo "<script>window.alert('User registered!')</script>";
 // }else{
 // 	echo "<script>window.alert('User registration revoked!')</script>";
 // }

// $var->checkPassword('test3@test.com','8ad8757baa8564dc136c1e07507f4a98');

// 
/*if($var->checkUser('test')==1){
 echo "<script>window.alert('Username exists!')</script>";}*/
 ?>
