<?php

include 'includes/db_connection.php';
include 'includes/functions.php';


?>

<html>
 <head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <title>login</title>
  <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
body {
    background-image: url("images/login.jpg"); background-size: 1370px 670px; background-repeat: no-repeat;
}</style>
  <style>
  #box
  {
   width:100%;
   max-width:500px;
   border:1px solid #ccc;
   border-radius:5px;
   margin:0 auto;
   padding:0 20px;
   box-sizing:border-box;
   height:270px;
   color:white;
   font-size: 20px;
  }
  a{
    color: #fff;
    text-decoration: none;
  }
  a:hover {color: #ffcf00;}
  .form-control{
    border-radius:none;
    width:200px;

  }
  .form input[type="text"], .form input[type="email"], .form textarea, .form select {
    color: #555;}
  </style>
 </head>

 <body>

  <?php
echo <<<_END
<h1 align="center">Welcome to Mvule Safaris</h1>
_END;
if (isset($_SESSION['role']))
  
   echo " $username, <p>You now logged in.</p>";

else 

echo <<<_END
<h2 align="center">Please <a href="login.php">Log in</a> or <a href="signup.php">Sign up</a></div><br><br></h2>
_END;
?>
  
    <br />
   </div>
  </div>
 </body>
</html>

