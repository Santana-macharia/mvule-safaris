<?php
 
include 'db_connection.php';

if(!$_POST['submit']){
  // you can remove this echo code and add alert using JS or use required tag in your input feilds.

  //echo "All feilds must be filled";
  
}

else {
  $sql = "DELETE FROM updates where name = $name";
if (mysqli_query($conn, $sql)) {
    echo "<h1><center> Record deleted successfully</center></h1>";
} 
else 

{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if(!$_POST['submit']){
  // you can remove this echo code and add alert using JS or use required tag in your input feilds.
  
  //echo "All feilds must be filled";
  
}

else {
  $sql = "DELETE From comments where name = name";
if (mysqli_query($conn, $sql)) {
    echo "<h1><center> Record deleted successfully</center></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
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
    </head>

<?php
   //home.php
   session_start();
   if(!isset($_SESSION["username"]))
   {
    header("location: index.php");
   }

   
   ?>
  <body>
<header>
<CENTER>
<h1>ADMIN</h1>
<h3>WELCOME</h3>
<?php echo '<h4 align="center">'.$_SESSION["username"].'</h4> ';?></CENTER> 
<link rel="stylesheet" type="text/css" href="admin.css">
<style type="text/css">
.kaka {
    border-radius: 5px;
 
    padding: 0px 0px 0px 190px;
    height: 100px;
}
.left-nav {
    z-index: 1;
    top : 51px;
    height: 100%;
    width: 195px;
    background: #000;
    color: #FCFDFB;
   
    left: 0;
    overflow: auto;
    animation: anim-nav-swipe-from-left 0.5s linear 1;
}
.thumbnail{

max-width: 850px;
letter-spacing:1px
text-align: center;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
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
}
body{
  background-image: url("images/beautiful.jpg");}
</style>
<script src="admin.js"></script>
       

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: rgb(255, 255, 255, );" 
              style="color: rgb(14, 14, 14);">
        <div class="container-fluid" >
        
          <div class="menuContainer">
          <span><img src="login.jpg" alt=""  height="47"></span><span>Admin Panel</span>
           
        <div class="menu-element">
              
  

          </div>
        </div>


    </nav>
            <img src="login.jpg" alt=""  height="55">
       
        <!-- Left Nav -->
        <nav class="left-nav">
            <div class="left-nav-top">
                
            </div>
            <h2>Dashboard</h2>
            <div class="left-nav-links">
                <a href="http://localhost:8081/admin.php" ><span ></span>Users</a>

                <a href="adduser.php" class="active"><span class="icon-tree" ></span>Comments</a>

  <span> <a href="logout.php">Log out</a>

                
            </div>
        </nav>

        <div class="kaka">
<div class="thumbnail">
        <!-- Overview Content -->
        
     
 <?php
   
$sql = "SELECT name,email,comment FROM comment";
$result = $db->query($sql);

  
echo "<h1>COMMENTS <h1><br><div class='box'><table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Email</th>
<th>Comment</th></tr>";

     while($row = $result->fetch_assoc()) {
         echo "<tr><th>" . $row["name"]."</th>".
                "<th>".  $row["email"]."</th>".
               "<th>". $row["comment"]."</th>".
              "</tr></div>";
     }


?>
<br><br>

</div>

</div>