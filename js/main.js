//Notification types
function Notifications(NotificationMessage, NotificationType) {
    switch(NotificationType) {
        case "APIError":
            APIException(NotificationMessage);
          break;
        case "successful":
            Successfulchange(NotificationMessage);
          break;
          case "error":
            ErrorMessage(NotificationMessage);
          break;
        default:
            console.log(NotificationMessage);
    } 
};

function APIException(NotificationMessage) {
    console.log(NotificationMessage);
    $("#notification-message").html("<p>"+NotificationMessage+"</p>");
    $("#notification-header").html("<p>API Error!</p>");
    $('#notification-modal').modal('show');
}

function Successfulchange(NotificationMessage) {
    console.log(NotificationMessage);
    $("#notification-message").html("<p>"+NotificationMessage+"</p>");
    $("#notification-header").html("<p>success!</p>");
    $('#notification-modal').modal('show');
}

function ErrorMessage(NotificationMessage){
    console.log(NotificationMessage);
    $("#notification-message").html("<p>"+NotificationMessage+"</p>");
    $("#notification-header").html("<p>Error!</p>");
    $('#notification-modal').modal('show');
}

function LoginAPICall(username, password){
  var username = username;
  var password = password;
  if(username!="" && password!="" ){
    $.ajax({
      url: "php/login.php",
      type: "POST",
      data: {
        username: username,
        password: password						
      },
      cache: false,
      success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          sessionStorage.setItem('username', username);
          sessionStorage.setItem('admin', dataResult.admin);
          Notifications("Jay your loged in!", "successful");
          LoggedIn(username, dataResult.admin);
          $('#login-register').modal('hide');
        }
        else if(dataResult.statusCode==201){
          Notifications("Password or username wrong", "error");
        }else{
          Notifications("Something horrible went wrong o no", "APIError");
        }
      }
    });
  }
  else{
    Notifications("Please fill in all the fields", "error");
  }
}

function LoadAnnouncmentsAPICall(){
    $.ajax({
      url: "php/LoadAnnouncments.php",
      type: "GET",
      data: {},
      cache: false,
      success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult[0].statusCode==200){
          $("#announcments-list").html("");
          for(let i = 1; i < dataResult.length; i++){
            $("#announcments-list").append("<button type=\"button\" class=\"list-group-item list-group-item-action announcments-list-item\" id=\"announcment-id-"+dataResult[i].announcements_id+"\""
            +" data-announcment=\""+dataResult[i].title+";"+dataResult[i].message+";"+dataResult[i].banner_image+";"+dataResult[i].created_at+"\" "+
            ">"+dataResult[i].title+"</button>");
         }
        }
        else if(dataResult.statusCode==201){
          Notifications("didnt get any data", "error");
        }else{
          Notifications("Something horrible went wrong o no", "APIError");
        }
      }
    });
}

function PostAnnouncment(username, admin){
  var username = username;
  var admin = admin;
  var tittle = $('#text-input-title').val();
  var message = $('#textarea-message').val();
  var image = "none";

  if(tittle!="" && message!="" ){
    $.ajax({
      url: "php/postAnnouncment.php",
      type: "POST",
      data: {
        username: username,
        admin: admin,
        tittle: tittle,
        message: message,
        image: image						
      },
      cache: false,
      success: function(dataResult){
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          Notifications("Yeah posted announcment!", "successful");
          $('#textarea-message').val("");
          $('#text-input-title').val("");
          LoadAnnouncmentsAPICall();
        }
        else if(dataResult.statusCode==201){
          Notifications("something did go wrong", "error");
        }else{
          Notifications("Something horrible went wrong o no", "APIError");
        }
      }
    });
  }
  else{
    Notifications("Please fill in all the fields", "error");
  }
};

function LoadMainAnnouncment(dataArray){
  //sets selected announcment for page refresh or page redirect
  sessionStorage.setItem('selectedAnnouncment', JSON.stringify(dataArray));
  //checks if the announcment exsists on page
  if ($('#Announcement-body').length){
    //checks and changes bbcode too html
    var html = bbcodeParser.bbcodeToHtml(dataArray[1]);
    //show announcment in detail
    $("#Announcement-body").html("<h2>"+dataArray[0]+"</h2><p>"+html+"</p><p>"+dataArray[3]+"</p>");
  }
  else{
    //redirects too the main page where announcment view excists
    location.href = "index.php";
  }
};

//function to show for if users are logged in
function LoggedIn(username, admin){
  $("#no-login-nav").hide();
  $("#loggedin-nav").show();
  console.log('welcome: '+username);
  console.log('admin level: '+admin);
};

//for logging out
function Logout(){
  sessionStorage.removeItem("username");
  sessionStorage.removeItem("admin");
  location.href = "index.php";
};

$( document ).ready(function() {
  //Loads Announcments
  LoadAnnouncmentsAPICall();

  //checks if user is logged in on opening site
  if (sessionStorage.username) {
    LoggedIn(sessionStorage.username, sessionStorage.admin);
  } else {
    console.log('user not exist in the session storage');
    $("#loggedin-nav").hide();
    $("#no-login-nav").show();
  }

  //for if a announcment is selected
  if(sessionStorage.selectedAnnouncment) {
    let data = JSON.parse(sessionStorage.selectedAnnouncment);
    LoadMainAnnouncment(data);
  }
  
  //##buttons click events##
  //Login button
  $('#btn-login').on('click', function() {
    LoginAPICall($('#username-login').val(), $('#password-login').val());
  });

  //Logout button
  $('#btn-logout').on('click', function() {
    Logout();
  });

  //select register butoon
  $('#btn-select-register').on('click', function() {
    Notifications("This function is under development!", "error");
  });

  //select login button
  $('#btn-select-login').on('click', function() {
    Notifications("login is already selected!", "error");
  });

  //select post button
  $('#btn-post-announcement').on('click', function() {
    if (sessionStorage.username) {
      PostAnnouncment(sessionStorage.username, sessionStorage.admin);
    } else {
      console.log('user not exist in the session storage');
      Notifications("Your not loggedin", "error");
    }
  });

  //load main Announcment
  $('#announcments-list').on('click', 'button.announcments-list-item', function() {
    let dataArray = this.attributes["data-announcment"].value.split(";", 4);
    LoadMainAnnouncment(dataArray);
  });
});