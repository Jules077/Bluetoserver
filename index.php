<?php
    function LoadAnnouncements(){

    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Bluetoserver - Main Page</title>
</head>

<header class="navbarheader">

    <h1 class="navbarheader">Bluetoserver</h1>
        <nav>
            <ul class="navbarheader">
                <li class="navbarheader"><a class="active-navbar" href="index.php">Main Page</a></li>
                <li class="navbarheader"><a class="active-navbar" href="adminpage.php">Admin Page</a></li>
                <li class="navbarheader"><button type="button" class="btn btn-info login" data-toggle="modal" data-target="#login-register">Login/Register</button></li>
            </ul>
        </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="login-register" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="submit" class="btn btn-info" style="float: left; width: 45%;" id="btn-select-login" name="btn-select-login">Login</button>
                <button type="button" style="float: right; width: 45%;" class="btn btn-info" id="btn-select-register" name="btn-select-register">Register</button>
            </div>
            <div class="modal-body" id="login-info">
                <div id="login-container">
                    <label for="username">Your Username</label>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" placeholder="Password" class="form-control" aria-label="Password" data-toggle="password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" style="float: left; width: 45%;" id="btn-login" name="btn-login">Login</button>
                <button type="button" style="float: right; width: 45%;" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<body>
    <div id="main-container">   
        <div id="left-container">
            <div class="panel panel-default">
                <div class="panel-heading">Announcement's</div>
                <div class="panel-body panel-control">
                    <?php LoadAnnouncements(); ?>
                </div>
            </div>
        </div>
        <div class="clearfix">
        <div id="right-container">
            <div class="panel panel-default">
                <div class="panel-heading">Announcement</div>
                <form method="post" action="index.php">
                <div class="panel-body" id="Announcement-body">announcement context</div>
                </form>
            </div>
        </div>
    </div>

    <!-- BOOTSRAP, JS, ETC. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>