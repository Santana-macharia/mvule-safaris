<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>

<div style="width: 100%; ">
<span style="font-size:30px;float: right;cursor:pointer" onclick="openNav()">&#9776; open</span>

<img src="StudyPortals-Logo.png" alt="Mountain View" style="width:300px;height:70px;">



<body>

<h1><center>UNIVERSITY LOCATIONS</center></h1>



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
    <a href="http://localhost/project/offices.php">OFFICES</a> 
   
    
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














<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:100%;">UNIVERSITY</th>
    
  </tr>
  <tr>
    <td><a href="http://localhost/project/campus/UON1.php">University of Nairobi</a></td>
   
  </tr>
  <tr>
    <td><a href="http://localhost/project/campus/egerton.php">Egerton University</a></td>
    
  </tr>
  
  <tr>
    <td><a href="http://localhost/project/campus/KU1.php">Kenyatta University</a></td>
   
  </tr>
  
  
  <tr>
    <td><a href="http://localhost/project/campus/JKUAT.php">Jomo Kenyatta University of Agriculture and Technology</a></td>
    
  </tr>
  
  
  <tr>
    <td><a href="http://localhost/project/campus/maseno.php">Maseno University</a></td>
    
  </tr>
  
  <tr>
    <td><a href="http://localhost/project/campus/strathmore.php">Strathmore University Nairobi</a></td>
   
  </tr>
  
  <tr>
    <td><a href="http://localhost/project/campus/catholicuniversity.php">Catholic University of Eastern Africa</a></td>
    
  </tr>
  
  <tr>
    <td><a href="http://localhost/project/campus/masinde.php">Masinde Muliro University of Science & Technology</a></td>
    
  </tr>
  
  <tr>
    <td><a href="http://localhost/project/campus/kenyamedicalcollege.php">Kenya Medical Training College</a></td>
   
  </tr>
  
  <tr>
    <td><a href="http://localhost/project/campus/southeastern.php">South Eastern Kenya University</a></td>
   
  </tr>
  
  
  <tr>
    <td><a href="http://localhost/project/campus/kenyamethodist.php">Kenya Methodist University</a></td>
    
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/usiu.php">United States International University</a></td>
    
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/mountkenya.php">Mount Kenya University</a></td>
   
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/pwani.php">Pwani University</a></td>
   
  </tr>
  
   
  <tr>
    <td><a href="http://tukenya.ac.ke/">Technical University of Kenya</a></td>
    
  </tr>
  
   
  <tr>
    <td><a href="http://michukitech.ac.ke/">Michuki Technical Institute Muranga</a></td>
   
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/africanvirtual.php">African Virtual University</a></td>
   
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/zetech.php">Zetech University</a></td>
    
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/tom.php">Technical University of Mombasa (Mombasa Polytechnic University College)</a></td>
   
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/maasai.php">Masai Mara University</a></td>
   
  </tr>
  
   
  <tr>
    <td><a href="http://localhost/project/campus/daystar.php">Daystar University</a></td>
   
  </tr>
  
   
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
