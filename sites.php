<?php
 
include 'includes/db_connection.php';
require 'includes/functions.php';
require 'adminheader.php';

?>
<html>
<head>
<link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
<link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
<link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="admin.css">
<style type="text/css">

.sidebar{
  background-color: black;
}
.kaka {
    border-radius: 5px;
 
    padding: 0px 0px 0px 80px;
    height: 100px;
}

.btn-success {
    color: #fff;
    background-color: green;
    border-color: #4cae4c;
  }
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 0px solid transparent;
      border-radius: 0px;}
.left-nav {
    z-index: 1;
    top : 50px;
    height: 100%;
    width: 195px;
    background: #000;
    color: #FCFDFB;
   
    left: 0;
    overflow: auto;
    animation: anim-nav-swipe-from-left 0.5s linear 1;
}
.thumbnail{

max-width: 950px;
letter-spacing:1px
text-align: center;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
background-color: rgba(225,225,225, 0.45);
  margin: auto;
  border-radius: 0px;

}
.form2
{

   border:1px solid #B5223D;
   border-radius:5px;
   margin:0 auto;
   
   box-sizing:border-box;
    
   
    border-radius: 5px;
    background-color:rgba(0, 123, 220, 0.2);
    padding: 20px 1px 20px 200px;
    height: 100px;

}
li a {
    display: block;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
}
input[type=text], select {
    width: 420px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 420px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
        margin: 8px 0px 1px 60px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
    background:rgba(58, 47, 48, 0.0);
}
body{
  background-image: url("images/beautiful.jpg")}
</style>
</head>
<?php
   //home.php
   //session_start();
   //if(!isset($_SESSION["username"]))
   //{
   // header("location: index.php");
   //}

   
   ?>
<body>
<script src="admin.js"></script>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: black;" 
      style="color: rgb(14, 14, 14);">
<div class="container-fluid" >

      <div class="menuContainer" style="color:white; font-size: 30px;">
      <span><img src="images/login.jpg" alt=""  height="35"></span><span>Admin Panel</span>
      
    <div class="menu-element">
      
    

    </div>
        </div>
        </div>
        </nav>
        

        <!-- Left Nav -->
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-2 sidebar">
          
    <?php include 'dashboardmenu.php'; ?>

        </div>
    </div>
<div class="kaka">
        <!-- Overview Content -->
<div class="thumbnail">
  <center><h3>All Sites</h3></center>
  <p><a href="addsites.php" class="btn btn-success">Add Site</a></p>
<table class="table table-striped table-bordered">
    <theader>
    <tr>
    <th>Name</th>
    <th>Resident Charges</th>
    <th>Non Resident Charges</th>
    <th>Nearby Hotels</th>
    <th>Description</th>
    <th>Action</th> 
    </tr>
  </theader>
  <tbody>
<?php
$pdo = Database::connect();
$sql = 'SELECT * FROM sites ORDER BY Site_ID DESC';
foreach ($pdo->query($sql) as $row) 
      {
          echo '<tr>';
          echo '<td>'. $row['name'] . '</td>';
          echo '<td>'. $row['resident_charges'] . '</td>';
          echo '<td>'. $row['non_resident_charges'] . '</td>';
          echo '<td>'. $row['hotelsnear'] . '</td>';
          echo '<td>'. $row['description'] . '</td>';
echo '<td width=400>';
echo '<a class="btn btn-primary" href="read_sites.php?id='.$row['Site_ID'].'">View</a>';
echo ' ';
echo '<a class="btn btn-success" href="edit_sites.php?id='.$row['Site_ID'].'">Update</a>';
echo ' ';
echo '<a class="btn btn-danger" href="delete_sites.php?id='.$row['Site_ID'].'">Delete</a>';
echo '</td>';
          echo '</tr>';
      }
      Database::disconnect();
?>

   </div>
  </div>
 </body>
</html>
