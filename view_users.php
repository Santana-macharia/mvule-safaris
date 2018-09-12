

<?php

include 'adminheader.php';
require 'includes/db_connection.php';
include 'includes/functions.php';

  $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: user.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users WHERE userid = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }

  include 'header.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
    background-image: url("images/beautiful.jpg"); background-size: 1370px 1000px; background-repeat: no-repeat;
}</style>
<style>
  #box
  {
   width:100%;
   max-width:400px;
   border:1px solid #ccc;
   border-radius:1px;
   margin:0 auto;
   padding:0 20px;
   box-sizing:;
   height:410px;
   color:black;
   font-size:15px;
  }
  ul{
    color:black;
    font-size: 10px;
    padding:12px 5px;
  }
  .container{
    border-radius: 1px;
    color:black;
  }
  .form-control{
    border-radius:none;
    width:300px;

  }

  </style>
</head>


                 <ul class="nav navbar-nav navbar-center" >
               
                  </ul>
            </div>


      <a href="users.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Back to Users</a>
      <a href="index.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Log Out</a>

  <body>
  <div class="container">
  
    <div class="span10 offset1">
                    <div class="row">
                        <h3>User's Details</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Name:</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Email:</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['email'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Country:</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['country'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Username:</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['username'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Password:</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['password'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="users.php"></a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
    </body>
    </html>


