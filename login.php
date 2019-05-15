 <?php 
 session_start();
include("config.php");
 
 $error = "";
 
 if(isset($_POST['submit'])){
	 if(empty($_POST['email']) || empty($_POST["password"])) {
		echo "To log in please fill out both the email and password.";
		$error = "To log in please fill out both the email and password.";
	 } else {
		$email = $_POST['email'];
		$password = $_POST['password'];
		 
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysqli_real_escape_string($link, $email);
		$password = mysqli_real_escape_string($link, $password);
		$password = md5($password);
		 
		$sql = "SELECT userAccountID FROM useraccount WHERE email='$email' AND password='$password'";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$data = mysqli_fetch_array($result);
		
		if(mysqli_num_rows($result) == 1){
			$_SESSION['email'] = $currentUser;
			header("location: AccountManagementUser.php");
		}else{
			$error = "Incorrect email and password";
			echo "Incorrect email and password";
		}
	}
}
?>