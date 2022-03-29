<?php
$servername = "Enter your database IP here";
$username = "Enter your database username here";
$password = "Enter your user password here";
$dbname = "Enter your database name here";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ( $_SERVER['REQUEST_METHOD'] != 'POST' ) {return;}

// Check to see if the needed variables exist
if (isset($_POST['discordId']) && isset($_POST['channelId']) && isset($_POST['assetId'])) {
    // Fetch record from database

    
    $result = true;
}else{
    $result = false;
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Discord NEAR Link</title>
     <meta name="description" content="Verify if a discord user's wallet contains a specified asset">
     <meta name="keywords" content="Discord NEAR asset verifier">
     <meta name="author" content="John Dodds Jr">
     <link rel="icon" href="favicon.ico" type="image/x-icon">
     <meta http-equiv="X-Content-Type-Options" content="nosniff">
     <meta http-equiv="X-XSS-Protection" content="1; mode=block">
     <meta http-equiv="Referrer-Policy" content="no-referrer, strict-origin-when-cross-origin">
     <script src="lib/near-api-js.js"></script>
     <style>
         .item1 {grid-area: header;}
         .item2 {grid-area: leftSide;}
         .item3 {grid-area: stepOne;}
         .item4 {grid-area: stepTwo;}
         .item5 {grid-area: stepThree;}
         .item6 {grid-area: rightSide;}
         .item7 {grid-area: footer;}
         .grid-container {
             display: grid;
             grid:
                 'header header header header header'
                 'leftSide stepOne stepTwo stepThree rightSide'
                 'footer footer footer footer footer';
             grid-gap: 10px;
             padding: 10px;
         }
         .grid-container>div {
             background-color: #EAEAEA;
             text-align: center;
             padding: 20px 0;
             font-size: 30px;
         }
     </style>
 </head>
 <body>
     <div class="grid-container" align="center">
         <div class="item1" style="background-color: #FFFFFF;"><img src="images/banner.webp" alt="profile" class="img-responsive" /></div>
         <div class="item2" style="background-color: #FFFFFF;"></div>
         <div class="item3"></div>
         <div class="item4"><?php echo $result; ?></div>
         <div class="item5"></div>
         <div class="item6" style="background-color: #FFFFFF;"></div>
         <div class="item7" style="background-color: #FFFFFF;"></div>
     </div>
 </body>

 </html>
