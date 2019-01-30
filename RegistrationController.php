<?php 

/*Starting session in front of every file to use global session*/
session_start();	
include 'RegistrationModel.php';
$loginError = array();


class RegistrationController {
	private $uID;
	private $uName;
	private $uAddress;
	private $uContact1;
	private $uContact2;
	private $uChildName;
	private $uChildDate;
	private $uGender;
	private $uEmail;
	private $username;
	private $password;


	public function setUid($uID){
		$this->uID = $uID;
	}
	public function setUname($uName){
		$this->uName = $uName;
	}

	public function setUaddress($uAddress){
		$this->uAddress = $uAddress;
	}

	public function setUContact1($uContact1){
		$this->uContact1 = $uContact1;
	}

	public function setUContact2($uContact2){
		$this->uContact2 = $uContact2;
	}

	public function setUchildname($uChildName){
		$this->uChildName = $uChildName;
	}

	public function setUchilddate($uChildDate){
		$this->uChildDate = $uChildDate;
	}

	public function setuGender($uGender){
		$this->uGender = $uGender;
	}

	public function setuEmail($uEmail){
		$this->uEmail = $uEmail;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getUid(){
		return $this->uID;
	}

	public function getUname(){
		return $this->uName;
	}

	public function getUaddress(){
		return $this->uAddress;
	}
	public function getUContact1(){
		return $this->uContact1;
	}
	public function getUContact2(){
		return $this->uContact2;
	}
	public function getUchildname(){
		return $this->uChildName;
	}
	public function getUchilddate(){
		return $this->uChildDate;
	}
	public function getUgender(){
		return $this->uGender;
	}
	public function getUemail(){
		return $this->uEmail;
	}
	public function getUsername(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}






} 
/*End of RegistrationController Class*/

 
/*Registration form submission*/
if(isset($_POST['register'])){
	 // $uID = mysql_real_escape_string($_POST['uID']);
	
	 $uName= trim($_POST['uName']);
	 $uAddress = trim($_POST['uAddress']);
	 $uContact1 = trim($_POST['uContact1']);
	 $uContact2 = trim($_POST['uContact2']);
	 $uChildName = trim($_POST['uChildName']);
	 $uChildDate = trim($_POST['uChildDate']);
	 $uGender = trim($_POST['uGender']);
	 $uEmail = trim($_POST['uEmail']);
	 // $username = trim($_POST['username']);
	 $password = trim($_POST['password']);
	 $password2 = trim($_POST['password2']);
	 $errors = array();

	

	 /*Form validation for password errors*/
	 if($password2!=$password){
	 	 array_push($errors,"Both passwords need to be the same!");
	 	$error = "Both passwords need to be the same!";
	 	// echo "<script>window.alert('$error')</script>";
	 }

	 /*Ajax for unique username*/


	 /*In case no errors are found*/
	 // $errors[] = "Password Mismtch";

	 if(count($errors)==0){
	 // if(count($errors)==0){
	 	$password = md5($password);	//password encryption
	 	$register = false;
	 	$reg = new RegistrationController();
	 		$reg->setUname($uName);
	 		$reg->setUaddress($uAddress);
	 		$reg->setUContact1($uContact1);
	 		$reg->setUContact2($uContact2);
	 		$reg->setUchildname($uChildName);
	 		$reg->setUchilddate($uChildDate);
	 		$reg->setuGender($uGender);
	 		$reg->setuEmail($uEmail);
	 		// $reg->setUsername($username);
	 		$reg->setPassword($password);

	 	$ins = new RegistrationModel();	
	 	if($ins->checkEmail($reg->getUemail())==1){
	 	
	 		// echo "<script>window.alert('Email alrady exists!')</script>";
	 		// header('location:login.php');
	 	}else{
	 	$register=$ins->registerUser($reg->getUname(),$reg->getUaddress(),$reg->getUContact1(),$reg->getUContact2(),$reg->getUchildname(),$reg->getUchilddate(),$reg->getUgender(),$reg->getUemail(),$reg->getPassword());
	 		if($register==1){
	 			// echo "<script>window.alert('User Registered!')</script>";
	 			// session_unset();
	 			// header('location:home.php');
	 			echo "Success";
	 		}else{
	 			// echo "<script>window.alert('Registration revoked, try again!')</script>";
	 			echo "Failed";
	 			// header('location:registriton.php');
	 		}
	 	}
	 	// echo "Failed";
	 	// header('location:home.php');
	  }else{
	  	echo $errors[0];
	  }
	 /*End of check registration*/
}
/*End of registration function*/


/*Login function*/
if(isset($_POST['login'])){
	// echo "test";
	$uEmail = trim($_POST['uEmail']);
	$password = trim($_POST['password']);

	$log = new RegistrationController();
		$log->setuEmail($uEmail);
		$password = md5($password);
		$log->setPassword($password);
// echo '<pre>';print_r();echo $uEmail; '</pre>';die;
	/*Check if the email and password combination match*/
	$chk = new RegistrationModel();

	$user = $chk->checkPassword($log->getUemail(),$log->getPassword());

	// echo '<pre>';print_r($user);echo '</pre>';die;
		if($user==null){
			/*Email Password mismatch*/
			session_unset();			
			header('location:login.php');
		}else{
				
			/*Store user name in session*/
			// echo '<pre>';print_r($user);echo '</pre>';die;
			$_SESSION['user']= $user;
			$_SESSION['status']='active';
			// echo '<pre>';print_r($_SESSION['user']);echo "test"; '</pre>';die;
			header('location:home.php');
			// echo '<pre>';print_r($user);echo '</pre>';die;
			
			// echo '<pre>';print_r($_SESSION['user']);echo '</pre>';die;
			// echo $_SESSION['status'];
		}	


		// if($chk->checkPassword($log->getUemail(),$log->getPassword())==1){
		// 	$_SESSION['status']='active';
		// 	$_SESSION['email']=$log->getUemail;
		// 	header('location:home.php');
		// }
		// else{
		// 	arraypush($loginError,"Username Password mismatch!");
		// 	if(count(arraypush()==3)){
		// 		header('location:registration.php');
		// 	}
		// 	header('location:registration.php');
		// }
}

/*Update user*/
if(isset($_POST['update'])){
	 $uName= trim($_POST['uName']);
	 $uAddress = trim($_POST['uAddress']);
	 $uContact1 = trim($_POST['uContact1']);
	 $uContact2 = trim($_POST['uContact2']);
	 $uChildName = trim($_POST['uChildName']);
	 $uChildDate = trim($_POST['uChildDate']);
	 $uGender = trim($_POST['uGender']);
	 $uEmail = $_SESSION['user']['uEmail'];
	 
	 $password = trim($_POST['password']);
	 $password2 = trim($_POST['password2']);
	 $errors=array();

	  /*Form validation for password errors*/
	 if($password2!=$password){
	 	 array_push($errors,"Both passwords need to be the same!");
	 	//$error = "Both passwords need to be the same!";
	 	// echo "<script>window.alert('$error')</script>";
	 }

	 /*In case no errors are found*/
	 

	 if(count($errors)==0){
	 	$password = md5($password2);	//password encryption
	 	$register = false;
	 	$reg = new RegistrationController();
	 		$reg->setUname($uName);
	 		$reg->setUaddress($uAddress);
	 		$reg->setUContact1($uContact1);
	 		$reg->setUContact2($uContact2);
	 		$reg->setUchildname($uChildName);
	 		$reg->setUchilddate($uChildDate);
	 		$reg->setuGender($uGender);
	 		$reg->setuEmail($uEmail);
	 		$reg->setUsername($username);
	 		$reg->setPassword($password);
	 		// echo '<pre>';print_r($reg);echo '</pre>';die;
		$ins = new RegistrationModel();	
	 	
	 	$register=$ins->updateUser($reg->getUname(),$reg->getUaddress(),$reg->getUContact1(),$reg->getUContact2(),$reg->getUchildname(),$reg->getUchilddate(),$reg->getUgender(),$reg->getUemail(),$reg->getPassword());
	 		if($register==1){
	 			// echo "<script>window.alert('User Registered!')</script>";
	 			// session_unset();
	 			// header('location:home.php');
	 			echo "Success";
	 			
	 			$user = $ins->checkPassword($reg->getUemail(),$reg->getPassword());

				if($user==null){
					/*Email Password mismatch*/
					session_unset();			
					header('location:login.php');
				}else{
						
					/*Store user name in session*/
					// echo '<pre>';print_r($user);echo '</pre>';die;
					$_SESSION['user']= $user;
					$_SESSION['status']='active';
					header('location:home.php');
					
				}	
	 		
	 		}else{
	 			// echo "<script>window.alert('Registration revoked, try again!')</script>";
	 			echo "Failed";
	 			// header('location:registriton.php');
	 		}
	 	}
	 	
	  else{
	  	echo $errors[0];
	  }
	 /*End of check registration*/

/*End of registration function*/
}

/*Delete function*/
if(isset($_POST['delete'])){
	$uID = $_SESSION['user']['uID'];
	// echo '<pre>';print_r($uID);echo '</pre>';die;
	$del = new RegistrationModel();
	$delete = $del->deleteUser($uID);
	if($delete == 1){
		session_unset();
		header('location:home.php');
	}else{
		header('location:home.php');
	}
}

/*Signout Function*/
if(isset($_POST['logout'])){
	echo $_SESSION['user'];
	echo $_SESSION['status'];
	session_unset(); //removing all session variables
	
//	session_destroy(); //destroying entire session
 	header('location:home.php');
 }


 /*Newsletter signup*/
 if(isset($_POST['newsletter'])){
 	$new = new RegistrationModel();
 	if($new->newsletter($_SESSION['user']['uID'])==1){
 		echo "Success";
 		header('location:home.php');
 	}
 	else{
 		echo "error";
 	}
 }


// $var = new RegistrationModel();
// $var->checkEmail('test4@test.com');
 ?>
