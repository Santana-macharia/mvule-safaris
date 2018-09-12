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
   height:370px;
   color:white;
   font-size: 20px;
  }
  a{
    background-color: black;
  }
  
  .form input[type="text"], .form input[type="email"], .form textarea, .form select {
    color: #555;}
  </style>

 </head>

                 <ul class="nav navbar-nav navbar-center" >
               <li>
                         
                    </li>
                  </ul>
            </div>

       <a href="signup.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">SIGN UP</a>
 <body>
  <div class="container">
   <h1 align="center">Welcome to Mvule Safaris</h1><br /><br />
   <div id="box">
    <br />


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
    <br />
   </div>
  </div>
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