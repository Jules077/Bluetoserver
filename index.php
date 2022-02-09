<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
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
        </ul>
    </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="login-register" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body" id="login-info">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-login" style="float: left; width: 45%;" id="btn-login" name="btn-login">Login</button>
            <button type="button" style="float: right; width: 45%;" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
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
                    announcement context
                </div>
            </div>
        </div>
        <div id="right-container">
            <div class="panel panel-default">
                <div class="panel-heading">Announcement</div>
                <form method="post" action="index.php">
                <div class="panel-body" id="savedlist"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- BOOTSRAP, JS, ETC. -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <script src="js/main.js"></script> -->
</body>

</html>