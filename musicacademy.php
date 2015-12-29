<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>N. Llerandi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/slideshow.css" type="text/css">
    <script type="text/javascript" src="instafeed.js/instafeed.min.js"></script>
      
  </head>
    
  <body>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><a href="inthestudio.php">In the Studio</a></div>
            <div class="col-md-4"><a href="musicacademy.php">Music Academy</a></div>
            <div class="col-md-4"><a href="booze.php">Booze</a></div>
          </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">  
                    <div id="instafeed"></div>
                </div>
                <div class="col-md-4"></div>
            </div>    
        </div>
            
            <script type="text/javascript">
                var feed = new Instafeed({
                get: 'user',
                userId: 231269882,
                resolution: 'standard_resolution',
                accessToken: '231269882.b5fe880.615795fc785a426f982d015761971415',
                clientId: 'b5fe88095947410699a2a913ee3dc8f9',
                filter: function(image) {
                    return image.tags.indexOf('efmusicacademy') >= 0;
                }
            });
                feed.run();
            </script>
            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
  </body>
</html>
