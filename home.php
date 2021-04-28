<?php
session_start();
if (!$_SESSION['email']) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Users.css">
    <link rel="stylesheet" href="https://npm-scalableminds.s3.eu-central-1.amazonaws.com/@scalableminds/chatroom@master/dist/Chatroom.css"/>
    <script>
      $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
    </script>
</head>
  <body>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="106322354744621">
      </div>
    <?php include'header.php'; ?>
    <br>
    <!-- <div class="chat-container"></div>
    <script
        src="https://npm-scalableminds.s3.eu-central-1.amazonaws.com/@scalableminds/chatroom@master/dist/Chatroom.js">
    </script>
    <script type="text/javascript">
        var chatroom = new window.Chatroom({
            host: "http://52.187.151.199:80",
            socketPath: "/socket.io/",
            title: "HENRY The AI-assistant",
            container: document.querySelector(".chat-container"),
            welcomeMessage: "HI I am Otech The Robot Assistant.\n Is there anything I can help you out?",
            speechRecognition: "en-US",
            voiceLang: "en-US"
        });
        chatroom.openChat();
    </script> -->


     <div>
    <form action="manualopen.php" method="GET">
      <button class="big-button" name="open">
      server room
    </button>
    </form>
  </div>

       <div>
    <form action="manualopen2.php" method="GET">
      <button class="big-button" name="open2">
      cashier room
    </button>
    </form>
  </div>
  </body>
</html>
