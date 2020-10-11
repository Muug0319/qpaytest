<!-- This is a static file -->
<!-- served from your routes in server.js -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A cool thing made with Glitch">

    <title>BZP Test</title>

    <link id="favicon" rel="icon" href="https://glitch.com/edit/favicon-app.ico" type="image/x-icon">
    
  </head>
  <body>
    <script>
      (function(d, s, id)
       {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/messenger.Extensions.js";
        fjs.parentNode.insertBefore(js, fjs);
      }
       (document, 'script', 'Messenger'));
    </script>
    
    <a data-app="<?php echo $_GET['khanbank'];?>" data-store-android="mn.slide.khaanbank" data-store-ios="610317572" href="<?php echo $_GET['khanbank'];?>">
    <img src="Qpay-Test/img/khanbank.jpg" alt="khanbank">
	</a>

    <script>
      window.onload = function( {
        var khanbank = url.khanbank("khanbank");
      })
    </script>
     
    
    
    <script>
    window.extAsyncInit = function() {
      console.log('Messenger extensions are ready');
      
      $('#registrationForm').submit(function(event) {
        console.log('Submit pressed');
        
        event.preventDefault();
        
        const formData = $('#registrationForm').serialize();
        
        $.post('/broadcast-to-manychat', formData, function (data) {
          MessengerExtensions.requestCloseBrowser(function () {
            console.log('Window will be closed');
          }, function (error) {
            console.log('There is an error');
            console.log(error);
          });
        });
      });
    
      
      
    }
    </script>
    
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"
            integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00="
            crossorigin="anonymous"></script>
  </body>
</html>
