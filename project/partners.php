<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 900px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
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
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 900px;
}
</style>
</head>
<body>
<div style="width: 100%; ">
<span style="font-size:30px;float: right;cursor:pointer" onclick="openNav()">&#9776; open</span>


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
    <a href="http://localhost/alogin/index.php">LOG IN</a>
    <a href="http://localhost/project/suggestion.php">CONTACT US</a>
    
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





<img src="StudyPortals-Logo.png" alt="Mountain View" style="width:300px;height:70px;">
 <h1><span style="color:orange;font-weight:italic">OUR</span> PARTNERS </h1>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'KUCCPS')" id="defaultOpen">KUCCPS</button>
  <button class="tablinks" onclick="openCity(event, 'CUE')">CUE</button>
  <button class="tablinks" onclick="openCity(event, 'Kenyaplex')">Kenyaplex</button>
</div>

<div id="KUCCPS" class="tabcontent">
  <h3>KUCCPS</h3>
  <p>This is a goverment site as well.Although more cattered to form four graduates it has alot to offer.It provides information about coarses offered in various points,coarse categorization,Minimal requirements to do each coarse, A blog to provide latest news and updates,What subjects are needed to do a specific coarse and much more.  </p>
  <td><a href="http://students-new.kuccps.net/login/?next=/">SITE:</a></td>
</div>

<div id="CUE" class="tabcontent">
  <h3>COMMISSION FOR HIGHER EDUCATION</h3>
  <p>This is a goverment owned site thus more reliable.It provides information of the number of universities that provide a particular coarse.In addition  it provides information about which universities are accredited.A newsletter,News updates and much more.</p>
  <td><a href="http://www.cue.or.ke/">SITE:</a></td> 
</div>

<div id="Kenyaplex" class="tabcontent">
  <h3>Kenyaplex</h3>
  <p>This site has over 4000 coarses to peruse.One can search for coarses offered by both colleges and universities.This includes:degrees,diplomas,advanced diplomas,Bridging coarses,certificates and Masters.Futher more; it provides detailed requirements to do a coarse in a particular instituition making it very handy.</p>
  <P>For an even more personalised customer service,You can submit you contact information with a preffered coarse you would like to study and they will help you get the information you need so as to make an informed decision</P>
  <p>The site also provides the location of all universities along with their campuses and their main area of study.An instance is where some colleges focus on business such as Strathmore Universities.</p>
  <td><a href="https://www.kenyaplex.com/courses/">SITE:</a></td>
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
     
</body>
</html> 
