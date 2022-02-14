<?php
	//Database connection
	include("db.php");

	//Input data
	$ID = $_POST['ID'];
	$userID = $_POST['userID'];

    $delete = "DELETE FROM `projects` WHERE `projects`.`Id` = " . $projectId . ";";

    $result = mysqli_query($con, $delete);

	if ($result) {
        echo "Successfully delete ";
	} else {
	    echo "Error updating record: " . mysqli_error($con);
	};

?>