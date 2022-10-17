<?php
	session_start();
	require_once('dbconnection.php');
		if(isset($_POST['submit'])){
			if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){
					$name=$_POST['name'];
					$email=$_POST['email'];
					$message=$_POST['message'];

					//$query="SELECT * FROM register where email='".$email."' limit 1";

					//$result=mysqli_query($connection,$query);

					$query="INSERT INTO contacts(name,email,message) VALUES ('{$name}','{$email}','{$message}')";

					$result=mysqli_query($connection,$query);

					if($result){
						echo "<script>alert('You have successfully submitted')</script>";
						$location="contacts.php";
						header("Location:$location");
						exit();
					}else{
						echo "register";
						exit();
					}
			}
		}
		
	
		
	
	mysqli_close($connection);
?>
 
	
