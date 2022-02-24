<?php
	include 'db.php';
    
	//input
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	//check if there is not a user already
	$duplicate=mysqli_query($conn,"select * from users where username='$username'");
	if (mysqli_num_rows($duplicate)>0)
	{
		echo json_encode(array("statusCode"=>201));
	}
	else{
		//puts new user in database and lets know if it was succesfull
		$sql = "INSERT INTO `users`( `username`, `email`, `created_at`, `password`, `admin`) 
		VALUES ('$username','$email','current_timestamp()','$password','0')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
	}
	mysqli_close($conn);
?>