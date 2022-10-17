<?php
	unset($_SESSION["user_id"]);
	unset($_SESSION["status"]);
	unset($_SESSION["role"]);

	session_destroy();

	$location="login.php";
	header("Location:$location");

?>