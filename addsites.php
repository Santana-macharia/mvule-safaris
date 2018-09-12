

<?php

include 'adminheader.php';
include 'db_connection.php';
include 'includes/functions.php';

$error = $name = $resident_charges = $non_resident_charges = $hotelsnear = $description = "";
if(isset($_POST["add"]))
{
 $name = mysqli_real_escape_string($conn, $_POST["name"]);
 $resident_charges = mysqli_real_escape_string($conn, $_POST["resident_charges"]);
 $non_resident_charges = mysqli_real_escape_string($conn, $_POST["non_resident_charges"]);
 $hotelsnear = mysqli_real_escape_string($conn, $_POST["hotelsnear"]);
 $description = mysqli_real_escape_string($conn, $_POST["description"]);

if ($name == "" || $resident_charges == "" || $non_resident_charges == "" || $hotelsnear == "" || $description == "")
$error = "Not all fields were entered<br><br>";
if ($error)
    {
        echo "<div>Please enter all fields</div>";
    }

 $sql = "INSERT INTO sites (name,resident_charges,non_resident_charges,hotelsnear,description) VALUES('$name','$resident_charges','$non_resident_charges','$hotelsnear','$description')";
 $result = $conn->query($sql);
 if($result)
   {
    echo "inserted";
   }
   else
   {
    echo "failed";
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

                 <ul class="nav navbar-nav navbar-center" >
               
                  </ul>
            </div>
 <a href="sites.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Back to sites</a>



      <a href="admin.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Back to Admin Dashboard</a>
      <a href="index.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">Log Out</a>

  <body>
  <div class="container">
   <h2 align="center">ADD SITES</h2><br /><br />
   <div id="box">
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     
     <div class="form-group">
      <label>Name</label><p>
      <input type="text" name="name" id="name"  placeholder="Site Name" required/>
     </div>
     <div class="form-group">
      <label>Resident Charges</label><p>
      <input type="text" name="resident_charges" id="resident_charges"  placeholder="resident charges" required />
     </div>
      <div class="form-group">
      <label>Non Resident Charges</label><p>
      <input type="text" name="non_resident_charges" id="non_resident_charges"  placeholder="Non Resident Charges" required/>
     </div>
     <div class="form-group">
      <label>Nearby Hotels</label><p>
      <input type="hotelsnear" name="hotelsnear" id="hotelsnear" placeholder="Nearby Hotels" required/>
     </div>
     <div class="form-group">
      <label>Description</label><p>
      <input type="description" name="description" id="description" placeholder="Description" required/>
     </div>
     <div class="form-group">
      <input type="submit" name="add" id="add" value="Submit" />
     </div>
     <div id="error"></div>
      
    </form>
  
    </div>
    </div>
    </body>
    </html>


