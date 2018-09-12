

<?php

include 'adminheader.php';
include 'db_connection.php';
include 'includes/functions.php';

$id = null;
if (!empty($_GET['id']))
{
  $id = $_REQUEST['id'];
}

if (null==$id) 
{
  header("Location: admin.php");
}

$error = $name = $email = $comment = "";
if(isset($_POST["update"]))
{
 $name = mysqli_real_escape_string($conn, $_POST["name"]);
 $email = mysqli_real_escape_string($conn, $_POST["email"]);
 $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
if ($name == "" || $email == "" || $comment == "")
$error = "Not all fields were entered<br><br>";
if ($error)
    {
        echo "<div>Please enter all fields</div>";
    }


    $sql="UPDATE comment SET name = '$name', email = '$email', comment = '$comment' WHERE comment_ID = '$id' ";
    $result = $conn->query($sql);
    if($result)
    {
      echo "record Successfully updated!<br>";
    }
    else
    {
      echo "Sorry! A problem occured while updating.";
    }

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
</head>
</head>
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
   height:310px;
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

                 <ul class="nav navbar-nav navbar-center" >
               
                  </ul>
            </div>

       
      <a href="comments.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Back to comments</a>
      <a href="admin.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Back to Admin Dashboard</a>
      <a href="index.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Log Out</a>

  <body>
  <div class="container">
   <h2 align="center">Update Comments</h2><br /><br />
   <div id="box">
 <form method="post" action="edit_comments.php?id=<?php echo $id ?>">

     <div class="form-group">
      <label>Name</label><p>
      <input type="text" name="name" placeholder="Name" value="<?php echo !empty($name)?$name:'';?>"  required/>
     </div>
     <div class="form-group">
      <label>Email</label><p>
      <input type="text" name="email" placeholder="email" value="<?php echo !empty($email)?$email:'';?>"  required />
     </div>
      <div class="form-group">
      <label>Comment</label><p>
      <input type="text" name="comment" placeholder="comment" value="<?php echo !empty($comment)?$comment:'';?>"  required/>
     </div>
     <div class="form-group">
      <input type="submit" name="update" id="update" value="Update" />
     </div>
     <div id="error"></div>
      
    </form>
  
    </div>
    </div>
    </body>
    </html>


