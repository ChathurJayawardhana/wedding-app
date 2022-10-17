<?php
	//$connection=mysqli_connect(dbserver,dbuser,dbpassword,dbname);
	$connection=mysqli_connect('localhost','root','','wedding');

	//mysqli_connect_errno(); mysqli_connect_error()
	//checking the connection
	if(mysqli_connect_error()){
		die('Database connection failed'.mysqli_connect_error());
	}else{
		//echo "<script>alert('Connection successfull')</script>";
	}
?>