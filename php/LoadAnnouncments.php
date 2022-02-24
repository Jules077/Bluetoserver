<?php	
	//Database connection
	include("db.php");

	//standerd mysql query for loading announcment
	$get = mysqli_query($conn,"SELECT * from announcements");

	//if announcment id gets posted change mysql qeury too only pick the one with the id
	if(isset($_POST['$AnnouncementID'])){
		$AnnouncementID = $_POST['$AnnouncementID'];
		$get = mysqli_query($conn,"SELECT * from announcements where='$AnnouncementID'");
	}

	//check if there is a result
	if (mysqli_num_rows($get)>0)
	{
		//pust the data in array too give back
		$rows = array();
		$rows[0] = array("statusCode"=>200);
		while($r = mysqli_fetch_assoc($get)) {
			$rows[] = $r;
		}
		echo json_encode($rows);
	}
	else{
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>