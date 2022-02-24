<?php
	//Database connection
	include("db.php");

	//Input data
	$announcmentID = $_POST['ID'];
	$userID = $_POST['userID'];

	//mysql qeury
    $delete = "DELETE FROM `announcment` WHERE `announcment`.`Id` = " . $announcmentID . ";";

    $result = mysqli_query($con, $delete);

	if ($result) {
        echo "Successfully delete ";
	} else {
	    echo "Error updating record: " . mysqli_error($con);
	};

?>