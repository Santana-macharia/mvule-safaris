<?php

require 'db_connection.php';
require 'includes/functions.php';

if(isset($_SESSION['username'])){
  header("location: index.php");
}

$error = $username = $password = "";

if (isset($_POST['login']))
{
  $username = sanitizeString($_POST['username']);
  $password = sanitizeString($_POST['password']);
  $role = sanitizeString($_POST['role']);


  if ($username == "" || $password == "" || $role == "")
  {
    $error = "Not all fields were entered<br>";
  }
  else
  {
    $hashed_pass = md5($password);
    if ($role == 1)
    {
      $result = queryMySQL("SELECT adminid,username,password FROM adminusers
        WHERE username='$username' AND password='$hashed_pass'");
    }
    elseif ($role == 2)
    {
      $result = queryMySQL("SELECT userid,name,username,password,email,country FROM users
      WHERE username='$username' AND password='$hashed_pass'");
    }
    
    if ($result->num_rows == 0)
    {
      $error = "<span class='error'>Username/Password
      invalid</span><br><br>";
    }
    else
    {
      $row = $result->fetch_array(MYSQLI_ASSOC);

      $_SESSION['username'] = $username;

      if($role == 1)
      {
        $_SESSION['adminid'] =  $row['adminid'];
        $_SESSION['role'] = 1;
        die("You are now logged in. Please <a href='admin.php?view=$username'>"."click here</a> to continue.<br><br>");
      }
      elseif ($role == 2)
      {
        $_SESSION['userid'] =  $row['userid'];
        $_SESSION['role'] = 2;
        die("You are now logged in. Please <a href='home.php?view=$username'>"."click here</a> to continue.<br><br>");
      }

    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mvule Safaris</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>


  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Mvule Safaris</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>Welcome to Mvule Safaris</h1>
<?php
echo <<<_END
  
<form class='form' method='post' action=''>$error
<h2 align="center">Please login to your user profile</h2>
<div class="form-group">
<label>Username</label><input type='text' name="username" id="username" class="form-control" placeholder="Enter username" />
</div>
<div class="form-group">
<label>Password</label><input type='password' name="password" id="password" class="form-control" placeholder="Enter password" />
</div>
<div class="form-group">
<label>Select Role</label><select name ='role' required><option value = '1'>Admin</option>
<option value = '2'>User</option></select>
</div>
<div class="form-group"><a>
<input type="submit" name="login" id="login" value="Login" /></a>
</div>
<div id="error"></div>
_END;
?>
          <hr class="intro-divider">
  

       <a href="signup.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">SIGN UP</a>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <section class="content-section-a">

      <div class="container">
        <div class="row">
          
            <div class="clearfix"></div>
            <h2 class="section-heading">About Mvule Safaris</h2>
            <p class="lead">Mvule Safaris is a tour company operating in the city of Nairobi. We offer Adventure tours to some of the most prestigious natural attractions in Kenya. <br> The company has been in operation for 10 years, thus having much experience in the tourism industry.

We continue to grow at a rapid rate due to our great value and the awesome experience that we give to all our customers.</p>

<blockquote>

<p>WE DON'T JUST GUIDE PEOPLE TO PLACES; WE HELP CREATE MEMORIES AND AN ULTIMATE EXPERIENCE TO REMEMBER!</p>

</blockquote>
          
        </div>

      </div>
      <!-- /.container -->
    </section>

    
    <!-- Footer -->
    <?php require 'footer_home.php'; ?>

  </body>

</html>
<script>
$(document).ready(function(){
 $('#login').click(function(){
  var username = $('#username').val();
  var password = $('#password').val();
  if($.trim(username).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"login.php",
    method:"POST",
    data:{username:username, password:password},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      $("body").load("home.php").hide().fadeIn(1500);
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      $("#box").effect("shake", options, 800);
      $('#login').val("Login");
      $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
     }
    }
   });
  }
  else
  {

  }
 });
});
</script>