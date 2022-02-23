<?php	
	//Database connection
	include("db.php");

	$get = mysqli_query($conn,"SELECT * from announcements");

	if(isset($_POST['$AnnouncementID'])){
		$AnnouncementID = $_POST['$AnnouncementID'];
		$get = mysqli_query($conn,"SELECT * from announcements where='$AnnouncementID'");
	}

	if (mysqli_num_rows($get)>0)
	{
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