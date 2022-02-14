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