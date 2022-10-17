<?php
	session_start();
	require_once('dbconnection.php');
		/*$name='udeepa';
		$email='abc@gmail.com';
		$mobile='07458xxxxx';
		$password='test123';
		$role='admin';
		*/
		if(isset($_POST['submit']))
		{
			if(isset($_POST['cname']) && isset($_POST['ccnum']) && isset($_POST['expmonth']) && isset($_POST['expyear']) && isset($_POST['cvv']))
			{
			
					$name=$_POST['cname'];
					$cardno=$_POST['ccnum'];
					$month=$_POST['expmonth'];
					$year=$_POST['expyear'];
					$cvc=$_POST['cvv'];

					
					$query="INSERT INTO `booking`(name,cardno,month,year,cvv) VALUES ('{$name}','{$cardno}','{$month}','{$year}','{$cvv}')";

					$result=mysqli_query($connection,$query);
                    if($result)
					{
						echo "<script>alert('You have successfully submit')</script>";
					$location="budgetplanner.php";
						header("Location:$location");
					//echo "<script>alert('Password not matched')</script>";
				}
				else
				{
					echo "Database query failed";
				}
			
			
			}
		}
		
	
	mysqli_close($connection);
?>

<html>
	<head>
		<script>alert("Payment Successful")</script>
	</head>
	<body>
	<body>
	
	<body>
</html>
	
