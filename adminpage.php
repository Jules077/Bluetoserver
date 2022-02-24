<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Bluetoserver - Admin Page</title>
</head>

<header class="navbarheader">

    <a href="./index.php"><h1 class="navbarheader">Bluetoserver</h1></a>
        <nav>
            <ul class="navbarheader" id="no-login-nav" style="display: none;">
                <li class="navbarheader"><button type="button" class="btn btn-info login" data-toggle="modal" data-target="#login-register">Login/Register</button></li>
            </ul>
            <ul class="navbarheader" id="loggedin-nav" style="display: none;">
                <li class="navbarheader"><a href="index.php">Main Page</a></li>
                <li class="navbarheader"><a class="active-navbar" href="adminpage.php">Admin Page</a></li>
                <li class="navbarheader"><button type="button" class="btn btn-danger logout" id="btn-logout">Logout</button></li>
            </ul>
        </nav>
</header>

<!-- Modal Notification -->
<div class="modal fade notification-modal" tabindex="-1" id="notification-modal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header" id="notification-header"></div>
            <div class="modal-body" id="notification-message">
            </div>
            <div class="modal-footer">
                <button type="button" style="width: 100%;" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Login/Register -->
<div class="modal fade login-modal" tabindex="-2" id="login-register" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="submit" class="btn btn-info" style="float: left; width: 45%;" id="btn-select-login" name="btn-select-login">Login</button>
                <button type="button" style="float: right; width: 45%;" class="btn btn-info" id="btn-select-register" name="btn-select-register">Register</button>
            </div>
            <div class="modal-body" id="login-info">
                <div id="login-container">
                    <label for="username">Your Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="username-login" aria-label="Username">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password-login" class="form-control" aria-label="Password" data-toggle="password">
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
                    <div class="list-group" id="announcments-list">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        <div id="right-container">
            <div class="panel panel-default">
                <div class="panel-heading">Post Announcement</div>
                <div class="panel-body" id="Announcement-post-body">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" placeholder="Title" id="text-input-title" aria-label="Title">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="textarea-message" rows="20"></textarea>
                    <label class="form-label" for="image-select">Select image</label>
                    <input type="file" class="form-control" id="image-select" disabled />
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success" style="width: 45%;" id="btn-post-announcement" name="btn-post-announcement">Post</button>
                </div>
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