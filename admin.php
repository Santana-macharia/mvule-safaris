<?php
 
include 'includes/db_connection.php';
include 'includes/functions.php';
include 'adminheader.php';

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
 
    padding: 0px 0px 0px 60px;
    height: 100px;
}
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

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    
}

li a {
    display: block;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: black;
    color: white;
}

li a:hover:not(.active) {
    background-color: #0F45C9;
    color: white;
}

</style>
</head>
<?php
   //home.php
   session_start();
   if(isset($_SESSION["adminid"]))
   {
   header("location: index.php");
   }

   
   ?>
<body>
       
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: black;" 
      style="color: rgb(14, 14, 14);">
<div class="container-fluid" >
  <div class="menuContainer" style="color:white; font-size: 30px;">
    <span><img src="images/login.jpg" alt=""  height="35"></span><span><strong>Admin Panel</strong></span>

    <div class="menu-element">
      
    </div>
  </div>
 </div>
</nav>
        <!-- Left Nav -->
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-2 sidebar">

<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    
    <ul class="nav nav-sidebar">
      
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="admin.php">Admin Dashboard</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="home_admin.php">Home</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="users.php">Users</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="comments.php">Comments</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="sites.php">Sites</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="addsites.php">Add Sites</a></li>
    <li class="<php?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Log out</a></li>
    </ul>  
        
        </div>
    </div>
<div class="kaka">

        <!-- Overview Content -->
<div class="container-fluid" >

<div class="thumbnail">
<h3>Admin Dashboard</h3>

<div class="vertical-menu">
  
</div> 

</div>
</div>
</div>

</body>
</html>
