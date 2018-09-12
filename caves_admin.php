<?php
include 'includes/db_connection.php';
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
body {
    background-color:lightgrey;
}</style>
<style>
header {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
    height:185px;
    width : 105%;
    font-size:12px;
}
footer{
  color: white;
    background-color: black;
    clear: left;
    text-align: center;
    height: 30px;
    font-size: 20px;
    padding-bottom: 2%;
    width:100%;

}

</style>

<body>
<header>
<CENTER>

<h1>MVULE SAFARIS</h1>
   <h2>Caves</h2>
<?php require 'home_page_menu.php'; ?>
</header>

<style>
body {
  min-height: 100vh;
  position: relative;
  margin: 0;

  }

footer {
  position: absolute;
  bottom: 0;
}
a{
  color:white;
  font-size: 16px;
}

   input[type=text]{
    width:130px;
    box-sizing:border-box;
    border:2px solid black;
    border-radius:4px;
    font-size:16px;
    background-color: white;
    background position: 10px 10px;
    background-repeat: no-repeat;
    padding:12px 20px 12px 40px;
    -webkit-transition:width 0.4s ease-in-out;
    transition:width 0.4s ease-in-out;
    float:right;
   }

   input[type=text]:focus {
    width:100%;
  }
  
* {box-sizing: border-box}

/* Style the tab */
div.tab {
   float: left;
    /* border: 1px solid black; */
    background-color: black;
    width: 5%;
    height: 96%
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: white;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color:grey;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: blue;
}

/* Style the tab content */
.tabcontent {
    margin: 0;
    padding: 0;
    border: 1px solid black;
   
    border-left: none;
    height: 100%;
    color:black;
    font-size: 20px;
 
  position:absolute;
  top:185px;
  width:1169px;
  left:135px;
}
#London{
    background-image: url("20.jpg");
    background-size: cover;
    background-repeat: no-repeat

}
#Paris{
background-image: url("24.jpg");
background-size: cover;
    background-repeat: no-repeat
}
#Tokyo{
background-image: url("21.jpg");
background-size: cover;
    background-repeat: no-repeat;
}
#Nai{
background-image: url("32.jpg");
background-size: cover;
    background-repeat: no-repeat;
}
#Kisu{
background-image: url("33.jpg");
background-size: cover;
    background-repeat: no-repeat;}
    #Kisu2{
background-image: url("31.jpg");
background-size: cover;
    background-repeat: no-repeat;}
     #Kisu3{
background-image: url("30.jpg");
background-size: cover;
    background-repeat: no-repeat;}
     #Kisu4{
background-image: url("29.jpg");
background-size: cover;
    background-repeat: no-repeat;}
     #Kisu5{
background-image: url("22.jpg");
background-size: cover;
    background-repeat: no-repeat;}
     #Kisu6{
background-image: url("25.jpg");
background-size: cover;
    background-repeat: no-repeat;}
</style>
</head>

<body>
  

<h3 class="sub-header"></h3>

<div class="table-responsive">

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
$sql = 'SELECT * FROM sites WHERE site_type_id=5 ORDER BY Site_ID DESC';
foreach ($pdo->query($sql) as $row) 
      {
          echo '<tr>';
          echo '<td>'. $row['name'] . '</td>';
          echo '<td>'. $row['resident_charges'] . '</td>';
          echo '<td>'. $row['non_resident_charges'] . '</td>';
          echo '<td>'. $row['hotelsnear'] . '</td>';
          echo '<td>'. $row['description'] . '</td>';
echo '<td width=400>';
echo '<a class="btn btn-primary" href="admin_view_caves.php?id='.$row['Site_ID'].'">View</a>';
echo '</td>';
          echo '</tr>';
      }

      Database::disconnect();
?>

    <br><br><br>
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<div class="panel panel-default">
<footer>Copyright &copy; 2017 Mvule Safaris, All Rights Reserved | Developed by Santana.</footer>
</div>
     
</body>
</html> 
