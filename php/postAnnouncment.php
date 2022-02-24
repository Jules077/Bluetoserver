<?php
    session_start();
	include 'db.php';

    //check if a admin is logged in
    if($_SESSION['admin'] == 1){
        //set input
        $username = $_POST['username'];
        $admin = $_POST['admin'];
    
        $tittle = $_POST['tittle'];
        $message = $_POST['message'];
        $image = $_POST['image'];

        //mysql qeury for adding data
        $sql = "INSERT INTO `announcements` (`announcements_id`, `title`, `message`, `banner_image`, `created_at`, `created_user_id`) 
        VALUES (NULL, '$tittle', '$message', NULL, current_timestamp(), '1'); ";

        //lets user know if it was succesfull or not
        if ($conn->query($sql) === TRUE) {
            echo json_encode(array("statusCode"=>200));
        } else {
            echo json_encode(array("statusCode"=>201));
        }
        $conn->close();
    }else{
        echo json_encode(array("statusCode"=>201));
    }
?>