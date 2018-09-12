<?php

include 'db_connection.php';
include 'includes/functions.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="view port$mysql_id = mysql_connect('localhost', 'root', 'mvule safaris');
mysql_select_db('bloodbank', $mysql_id);
" content="width=device-width, initial-scale=1.0">


<title>Mvule Safaris</title>

<link href="keven1.css" ref="stylesheet">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


</head>
<style>
body{
  background-image: url("images/plain.jpg");
  background-size: cover;
  color:white;

}
header{
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
    height:165px;
    width:101.125%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: blue;
}
input[type=text]:focus {
    width: 40%;
    color: black;
}
input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.card {
 
  max-width: 200px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.section{
color: black;

}
.container {
  padding: 0 16px;
}

#button {
    background-color:rgba(220, 77, 77, 0.56);
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
     font-family: cursive;
}
.container{
  color: black;
}
img.avatar {
    width: 30%;
    border-radius: 20%;
     
}
.form2{
font-style: bold;
font-size: 20px;
background-image: url("images/lake.jpg");
text-align: center;
 
background-size: cover;
margin:0 auto;
   padding:0 20px;
}

.text-muted {
    color: #fcf8e3;
}
 #box
  {
   
   border:1px solid #ccc;
   border-radius:5px;
   margin:0 auto;
   padding:0 20px;
   box-shadow: 10px;
   box-sizing:border-box;
   width:1364px;
   
   background-color: rgba(100, 130, 217, 0.68);

  }

  body {font-family: "Lato", sans-serif;}

  .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #0b0a0a;
  }


</style>
</script>

<?php
   //home.php
//session_start();

//if(isset($_SESSION["username"]))
//{
// header("location: index.php");
//}

?>
<body>
<header>
<CENTER>

<h2>MVULE SAFARIS</h2>

<?php require 'home_page_menu.php'; ?>
                            
</header>

<div style="padding:1em; 
color:white;background-color:black;text-align:center; 
border:1px solid black; height:601px;width:169px;">
<style>
.vertical-menu {
    width: 161px;
    height:601px;
}

.vertical-menu a {
    background-color: black;
    color: white;
    display: block;
    padding: 10px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: blue;
    color: yellow;
}

</style>

<div class="vertical-menu">
<a href="admin_all_sites.php">All Sites</a>
<a href="nationalparks_admin.php">National Parks and Game Reserves</a>
<a href="beaches_admin.php">Beaches and Islands</a>
<a href="forests_admin.php">Forests</a>
<a href="caves_admin.php">Caves</a>
<a href="mountains_admin.php">Mountains and Hills</a>
<a href="lakes_admin.php">Lakes and Rivers</a>
<a href="waterfalls_admin.php">Waterfalls</a>
<a href="museums_admin.php">Museums</a>
<a href="forts_admin.php">Forts and Monuments</a>
</div></div>

</style>
<style>.mySlides{
  height:601px;
  position:absolute;
  top:227px;
  width:1195px;
  left:169px;
  top:165px;

}

element.style {
    color: black;
}
</style>
<section>
<img class="mySlides" src="images/64.jpg">
<img class="mySlides" src="images/beach.jpg">
<img class="mySlides" src="images/nairobi.jpg">
<img class="mySlides" src="images/75.JPG">
<img class="mySlides" src="images/53.jpg">
<img class="mySlides" src="images/85.jpg">
    
    
</section>

<div id="form2">
<div id="box">
<div class="card">
<div class="imgcontainer">
  </div>
   </div><hr>
<span> <p align="center"><a href="index.php"></a></p> <br><p>
 <form method="post" target="_blank" style="color: black;">
     <h4 >Search for sites</h4>
  <input type="text"  name="search" style="color: black;" placeholder=" select location name"/ ><br>
  <input type="submit" name ="submit"   value="search"/>
                <br>

</form></span>
<span><section id="events">
<div class="">

<?php

if(isset($_POST['submit'])){

  $search = $_POST['search'];

  $sql = "SELECT * FROM sites WHERE name like '%$search%'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
   
      while($row = mysqli_fetch_assoc($result))
       {
         
          echo "<div class='thumbnail' ><br> Name:" . $row["name"].
                "<span><br><br>Resident charges :</span>". $row["resident_charges"].
                "<span><br><br> Non Resident charges:</span>". $row["non_resident_charges"].
                "<span><br><br> Hotels nearby:</span>". $row["hotelsnear"].
                  "<span></span>"."</div>
               ";
      }
  }
   else  
  {
    $output = "0 results:";
  }
}


?>
<?php  echo $output; ?>


<hr>  
<section class="w3-container w3-center w3-content" style="max-width:800px">
  <h2 class="w3-wide"></h2>
  <p class="w3-justify"> </p>  <p class="w3-medium"><a href="default.asp.html" target="_blank"></a></p>
<section id="comments">
  <H2 style="color: black;"><CENTER>
   <br> COMMENT BOX <br>
 <div class="hehe2"style="color: black;" > <br>  
<form method="post" action="" > 

  Name: <input type="text" name="name" style="background-color:rgba(8, 8, 8, 0.39);">
 <span><br><br>
  E-mail: <input type="text" name="email" style="background-color:rgba(8, 8, 8, 0.39);">
  <br>Comment: <br><br>
  <textarea name="comment" rows="5" cols="68" placeholder="We would love to get your feedback or questions " 
  style="background:rgba(250, 230, 220, 0.40); width:800px;color:black"></textarea>
</span><br><br>
  <input type="submit" name="send" value="Submit" style="background:rgba(40, 47, 48, 0);"> <hr> 
</form>
</div>
<div class="parallax1">
  <div class="textarea" style="color:white;">

<?php

$conn = mysqli_connect('localhost','root','','mvule')
 or die('Error connecting to MySQL server.');
   if (isset($_POST["send"]))
 {
 
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $comment = trim($_POST['comment']);

   $sql = "INSERT INTO comment ( name,  email, comment) values ('$name','$email','$comment')";
   mysqli_query($conn , $sql) or die('Error in inserting.');
}

$sql = "SELECT  name, email, comment FROM comment";
$result = $conn->query($sql);

     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<div class='thumbnail5' class='text-muted'><br>NAME:<CENTER>" . $row["name"]."</CENTER>
         <br> EMAIL :<CENTER>" . $row["email"]   ."</CENTER>
         <br> COMMENTS:<CENTER>". $row["comment"]."</CENTER><hr></div>";

     }
?>
</div>
</div>

</div></div>
</div></section></div></section>
</span></section>
     
<footer1 class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        
      </div>
    </div>
  </div>
</footer1>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>
<script src="js/jquery-1.11.3.min.js"></script>

<script src="js/bootstrap-3.3.7.js"></script>

<!-- Footer -->
<style>
footer{
   padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
    width:1363px;

}

.fa {
  padding: 5px;
  font-size: 25px;
  width: 30px;
  float:right;
  text-decoration: none;
  margin: 5px 2px;
  color:blue;
}

.fa:hover {
    opacity: 0.7;
}
</style>

<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
<a href="https://www.linkedin.com/in/mvule-safaris-986082143/"><i class="fa fa-linkedin"></i></a>
 <a href="https://twitter.com/mvulesafaris"><i class="fa fa-twitter"></i></a>
 <a href="https://www.facebook.com/mvuletravels/"><i class="fa fa-facebook-official"></i></a>
 
  <p class="w3-medium">
  </p>
</footer>
<footer>Copyright &copy; 2017 Mvule Safaris, All Rights Reserved | Developed by Santana.</footer>
</body>
</html>