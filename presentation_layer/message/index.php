<!DOCTYPE html>
<html lang="en">
<head>
<title>Message App</title>
<link rel="stylesheet" href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"/>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

<!-- Include firebase database -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBUKfM6W9PypPxLg-BDpH9eX8GNC_HRV1U",
    authDomain: "message-app-3e55f.firebaseapp.com",
    databaseURL: "https://message-app-3e55f.firebaseio.com",
    projectId: "message-app-3e55f",
    storageBucket: "message-app-3e55f.appspot.com",
    messagingSenderId: "74429329034",
    appId: "1:74429329034:web:1b93d1ef6ef7c58a5a0773",
    measurementId: "G-N7PJPL7QJV"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  var myName = prompt("Enter your name");

  //Get recipient name
  var resName;

  var username = [];

  function sendMessage(){
      //get message
      var message = document.getElementById("message").value;
      //save in database
      firebase.database().ref("messages").push().set({
          "sender": myName,
          "message": message,
          "receiver": resName
      });
      //prevent form from submitting
      return false;
  }
  //Users listening
  firebase.database().ref("messages").on("child_added",function(snapshot){
    if(snapshot.val().sender == myName || snapshot.val().receiver == myName){
    var user;
    if(snapshot.val().sender == myName)
    {
        user = snapshot.val().receiver;
    }
    else{
        user = snapshot.val().sender;
    }
    var flag = 0;
    for(var i=0;i<username.length;i++)
    {
      if(user==username[i])
        flag++;
    }
    if(flag==0)
    {
    username.push(user);
    var html = "";
    html += '<div class="chat_list">';
        html += '<div class="chat_people">';
            html += '<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>';
            html += '<div class="chat_ib">';
              html += '<h5>'
              html += '<button onclick="fn(this.innerHTML)">' + user + '</button>'
              html +='</h5>'; 
            html += '</div>';
        html += '</div>';
    html += '</div>';
    document.getElementById("users").innerHTML += html;}
    }
  });
  
  // Listen for incoming messages
  function fn(user){
    resName = user;
    document.getElementById("messages").innerHTML = "";
  firebase.database().ref("messages").on("child_added",function(snapshot){
    if(snapshot.val().sender == myName && snapshot.val().receiver == user){
    var html = "";
    html += '<div class="outgoing_msg">';
      html += '<div class="sent_msg">';
    /*
    //Give each message a unique id
    html += "<li id='message-" + snapshot.key + "'>";
    // show delete button
    if(snapshot.val().sender == myName){
      html += "<button data-id='" + snapshot.key + "' onclick='deleteMessage(this);'>";
      html += "Delete";
      html += "</button>";
    }*/
    //------------------------------------------------
        html += '<p>' + snapshot.val().message; + '</p>';
        //html += "</li>";
      html += '</div>';
    html += '</div>';
    document.getElementById("messages").innerHTML += html;}
    //------------------------------------------------
    else if(snapshot.val().sender == user && snapshot.val().receiver == myName){
      var html = "";
    html += '<div class="incoming_msg">';
      html += '<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>';
      html += '<div class="received_msg">';
        html += '<div class="received_withd_msg">';
          html += '<p>' + snapshot.val().sender + ":" + snapshot.val().message; + '</p>';
        html += '</div>';
      html += '</div>';
    html += '</div>';
    document.getElementById("messages").innerHTML += html;
    document.getElementById("form-send-message").style.display = "";
    document.getElementById("messages").style.display = "";
    }
    
  });
  }
  /*function deleteMessage(self){
    //get message ID
    var messageId = self.getAttribute("data-id");

    //delete message
    firebase.database().ref("messages").child(messageId).remove();
  }

  //Attach listner for delete message
  firebase.database().ref("messages").on("child_removed",function(snapshot){
    //Remove message node
    document.getElementById("message-" + snapshot.key).innerHTML = "This message was deleted";
  });*/
</script>
</head>

<body>
<div class="container">
  <h3 class=" text-center">Chat</h3>
    <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Users</h4>
            </div>
          </div>
          <div class="inbox_chat">
            <ul id="users"></ul>
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="messages">
              
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <!-- Form to send a message-->
              <form onsubmit="return sendMessage();" id="form-send-message">
                  <input id="message" class="type_msg" placeholder="Enter Message" autocomplete="off">
                  <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>