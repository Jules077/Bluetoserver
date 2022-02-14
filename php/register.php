<?php
	include 'db.php';
    
	$username=$_POST['username'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$password=$_POST['password'];
		
	$duplicate=mysqli_query($conn,"select * from users where username='$username'");
	if (mysqli_num_rows($duplicate)>0)
	{
		echo json_encode(array("statusCode"=>201));
	}
	else{
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