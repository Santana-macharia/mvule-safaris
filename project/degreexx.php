<?php
$output=NULL;

if(isset($_POST['submit']))
{
//connect to database
$mysqli = NEW mysqli("localhost","root","","project");

$search = $mysqli->real_escape_string($_POST['search']);

//query the database
$resultset= mysqli_query($mysqli,"SELECT degreeportalcoarseid.COARSENAME AS COARSENAME,
	degreeportal.UNIVERSITY AS UNIVERSITY,degreeportal.CAMPUS AS CAMPUS,degreeportal.DURATION AS DURATION,degreeportal.FEES AS FEES
	FROM degreeportalcoarseid,degreeportal
	WHERE degreeportalcoarseid.COARSENAME='$search' AND degreeportal.COARDEID = degreeportalcoarseid.COARDEID  ");

	while($rows= mysqli_fetch_assoc($resultset) )
	{
		$degreeportalcoarseid=$rows['COARSENAME'];
		$degreeportal = $rows['UNIVERSITY'];
		$degreeportals = $rows['CAMPUS'];
    $degreeportalss = $rows['DURATION'];
    $degreeportalsss = $rows['FEES'];

    $output .= " <p><center>COURSE:$degreeportalcoarseid &nbsp &nbsp &nbsp DURATION: $degreeportalss &nbsp &nbsp &nbsp FEES: $degreeportalsss<br/> CAMPUS: $degreeportals &nbsp &nbsp &nbsp UNIVERSITY: $degreeportal</center></p>";
       }
}
	?>
<div style="width: 100%; ">
<span style="font-size:30px;float: right;cursor:pointer;color:white;" onclick="openNav()">&#9776; open</span>

</div>

<style> 
body {
    background: url("books2.jpg");
    background-size: 1400px 400px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>

<img src="StudyPortals-Logo.png" alt="Mountain View" style="width:300px;height:70px;">

 <h1><center><span style="color:white;font-weight:italic">DEGREE PORTAL</span> </center> </h1>

<style>
body {
    margin: 0;
    font-family: 'Lato', sans-serif;
}

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="http://localhost/project/homepage.php">HOME</a> 
    <a href="http://localhost/project/coarseinfoxx.php">COARSE INFO</a>
    
    
  </div>
</div>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
<style> 
input[type=text] {
    width: 850px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('search.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 80%;
}

input[type=submit] {
    background-color: #FFD700;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
</style>

 <form method="POST">
 <center><input type="TEXT" name="search" placeholder="Search.." />
  <input type="SUBMIT" name="submit" value="Search"/></center>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
 </form>

 <?php echo $output; ?>
