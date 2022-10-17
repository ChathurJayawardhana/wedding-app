<?php
	session_start();
	require_once('dbconnection.php');
		/*$name='udeepa';
		$email='abc@gmail.com';
		$mobile='07458xxxxx';
		$password='test123';
		$role='admin';
		*/
		if(isset($_POST['submit'])){
			if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['mobile'])&&isset($_POST['password'])&&isset($_POST['confirmPassword'])){
			if(strcmp($_POST["password"],$_POST["confirmPassword"])==0){
					$name=$_POST['name'];
					$email=$_POST['email'];
					$mobile=$_POST['mobile'];
					$password=$_POST['password'];
					$role='user';

					$hashed_password=sha1($password);
					//echo "Hashed password: {$hashed_password}";

					$query="INSERT INTO `register`(name,email,mobile,password,role) VALUES ('{$name}','{$email}','{$mobile}','{$hashed_password}','{$role}')";

					$result=mysqli_query($connection,$query);

					if($result){
						//echo "<script>alert('Record added successfull')</script>";
						$location="login.php";
						header("Location:$location");
					}else{
						echo "Database query failed";
					}
				}else{
					$location="signup.php";
						header("Location:$location");
					//echo "<script>alert('Password not matched')</script>";
				}
			}
		}
		
	
	mysqli_close($connection);
?>
 
	
