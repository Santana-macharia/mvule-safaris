<!DOCTYPE html>
<html>
<body>


<div style="width: 100%; ">
<span style="font-size:30px;float: right;cursor:pointer" onclick="openNav()">&#9776; open</span>

</div>





<img src="StudyPortals-Logo.png" alt="Mountain View" style="width:300px;height:70px;">
 






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



<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>offices</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: -1.2725432, lng: 36.807206};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
         
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-88LSgoKcZmshQhbg9gGnB3BQEGeaVTw &callback=initMap">
    </script>
  </body>




<h1><center>OUR OFFICES  <img src="phone.png" alt="Mountain View" style="width:30px;height:30px;">  </center> </h1>

<center><p>Our offices are located at Chiromo, Nairobi Kenya. Correspondences and enquiries should be addressed to:</p>

<p>River Front Road,</p>
<p>Off Kinpinksi, Westlands.</p>
<p>P.O. Box 54999 – 00200, Nairobi, Kenya</p>
<p>Phone: +254 – 020 –7205000, 020-2021150, 020-2021154/56 </p>
<p>+254–726-445566, +254–717-445566, +254–780-656575</p>

<p>Fax: 254-020-2021172</p>
<p>Email: info@cue.or.ke</p></center>

</body>
</html>








<div style="  padding: 1em; color: white; background-color: grey; text-align: center;"><footer>Copyright &copy; liswels.com 2017






<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





</footer></div>
</body>

</html>

