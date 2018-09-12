<!DOCTYPE html>

<?php

$db = mysqli_connect('localhost','root','','project')
 or die('Error connecting to MySQL server.');

   if (isset($_POST["send"]))
 {
 
 
  $Firstname = trim($_POST['Firstname']);
  $Lastname = trim($_POST['Lastname']);
  $Phone = trim($_POST['Phone']);
  $Email = trim($_POST['Email']);
  $Subject = trim($_POST['Subject']);
  $Message = trim($_POST['Message']);


   
   $query = "INSERT INTO comments ( Firstname, Lastname, phone, Email, Subject, Message) 
   values ('$Firstname','$Lastname','$Phone','$Email','$Subject','$Message')";
   mysqli_query($db , $query) or die('Error in inserting.');
}

?>





<html>
<right>

<body background="Laptop1.png">








<div style="width: 100%; ">
	<div style="width:auto; float: right; "><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SIGN UP</button></div>



	
</div>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color:  	grey;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:center;width:100%}

/* Add padding to container elements */
.container {
    padding: 16px;

}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    border-radius: 4px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    border-radius: 4px;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}


.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>








<body>





<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">
  <center>
    <div class="container">
    <P>SIGN UP FOR OUR NEWSLETTER</P>
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
    </center>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<a href="http://localhost/project/homepage.php">
<img border="0" alt="W3Schools" src="StudyPortals-Logo.png" width="300" height="70"></a>
<head>
<title>CONTACT US</title>
</head>
<body>
<br>
<br>
<br>
<br>

<form method="post">


<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
.container {
    border-radius: 15px;
    background-color: white;
    padding: 15px;
    max-width:500px;

}
input[type=submit] {
    background-color: FFFF00;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }
</style>
<center>
<div class="container">

<h1><center><span style="color:grey;font-weight:italic">CONTACT US</span> <center></center></h1>

 <center>Firstname:
  <input type="text" name="Firstname">
  
  Lastname:
  <input type="text" name="Lastname">
<br>
 Phone:
  <input type="text" name="Phone">
  
  Email:
  <input type="text" name="Email">

<br>
Subject:<br>
<select name="Subject">
    <option value="News">News</option>
    <option value="Event">Event</option>
    <option value="Complaint">Complaint</option>
    <option value="Suggestion">Suggestion</option>
  </select>

</br>
Message:<br>
<textarea name="Message" rows="10" cols="30"></textarea>
<br>
<br>

<input type="submit" name="send" value="send"  id="send" style="background:grey;">


</form>

</center>
</div>
</center>









</body>
</html>


 