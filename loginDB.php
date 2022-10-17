<?php
	session_start();
	require_once('dbconnection.php');

		if(isset($_POST['submit'])){
			if(isset($_POST['email'])&&isset($_POST['password'])){
					$email=$_POST['email'];
					$password=$_POST['password'];

					$hashed_password=sha1($password);
					//echo "Hashed password: {$hashed_password}";

					$query="SELECT * FROM register where email='".$email."'AND password='".$hashed_password."' limit 1";

					$result=mysqli_query($connection,$query);

					if(mysqli_num_rows($result)==1){
						echo "<script>alert('You have successfully logged in')</script>";
						$location="dashboard.php";
						header("Location:$location");
						exit();
					}else{
						echo "you have entered incorrect password";
						exit();
					}
			}
		}
		
	
	mysqli_close($connection);
?>
 
	
