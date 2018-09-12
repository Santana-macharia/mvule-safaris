<?php

include 'adminheader.php';
include 'db_connection.php';
include 'includes/functions.php';

$error = $name = $email = $country = $username = $password = "";
  if(isset($_POST["signup"]))
	{
  	 $name = mysqli_real_escape_string($conn, $_POST["name"]);
  	 $email = mysqli_real_escape_string($conn, $_POST["email"]);
  	 $country = mysqli_real_escape_string($conn, $_POST["country"]);
  	 $username = mysqli_real_escape_string($conn, $_POST["username"]);
  	 $password = md5(mysqli_real_escape_string($conn, $_POST["password"]));

  if ($name == "" || $email == "" || $country == "" || $username == "" || $password == "")
  $error = "Not all fields were entered<br><br>";
  if ($error)
    {
        echo "<div>Please enter all fields</div>";
    }  
  $result = queryMySQL("SELECT * FROM users WHERE username='$username'");
  if ($result->num_rows>0)
    {
    $error = "That username already exists<br><br>";
    }
    else
    {
  $sql = "INSERT INTO users(name,email,country,username,password) 
  VALUES('$name','$email','$country','$username','$password')";
  $result = mysqli_query($conn, $sql);
  if($result)
    {
    die("Your Account has been created. Please <a href='login.php?view=$username'>"."click here</a> to login<br><br>");
    }
    else
    {
    echo "Signup failed";
    }
  }

  }

  include 'header.php';

?>

            <ul class="nav navbar-nav navbar-center">
               
                  </ul>
            </div>

       <a href="index.php" class="btn btn-primary btn-xl page-scroll" 
                style="background-color: rgba(20, 20, 20, 0.99);"
                         style="border-color: #49a42e;">LOGIN</a>
  
  <body>
  <div class="container">
   <h2 align="center">REGISTER A USER PROFILE</h2><br /><br />

   <div id="box">

 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     
     <div class="form-group">
      <label>Name</label><p>
      <input type="text" name="name" id="name" placeholder="Enter name" required/>
     </div>
     <div class="form-group">
      <label>Email Address</label><p>
      <input type="text" name="email" id="email" placeholder="Enter email address" required />
     </div>
     <div class="form-group">
     <div class="dropdown">
      <label>Country</label><p>
      
<select name="country">
<option value= " ">Select...</option>
<option value= "Albania">Albania</option>
<option value= "Algeria">Algeria</option>
<option value= "Angola">Angola</option>
<option value= "Argentina">Argentina</option>
<option value= "Australia">Australia</option>
<option value= "Bangladesh">Bangladesh</option>
<option value= "Belgium">Belgium</option>
<option value= "Benin">Benin</option>
<option value= "Brazil">Brazil</option>
<option value= "Burkina Faso">Burkina Faso</option>
<option value= "Burundi">Burundi</option>
<option value= "Cambodia">Cambodia</option>
<option value= "Cameroon">Cameroon</option>
<option value= "Canada">Canada</option>
<option value= "Chad">Chad</option>
<option value= "Chile">Chile</option>
<option value= "China">China</option>
<option value= "Colombia">Colombia</option>
<option value= "Comoros">Comoros</option>
<option value= "DRC">DRC</option>
<option value= "Denmark">Denmark</option>
<option value= "Djibouti">Djibouti</option>
<option value= "Egypt">Egypt</option>
<option value= "Equatorial Guinea">Equatorial Guinea</option>
<option value= "Eritrea">Eritrea</option>
<option value= "Ethiopia">Ethiopia</option>
<option value= "Finland">Finland</option>
<option value= "France">France</option>
<option value= "Gabon">Gabon</option>
<option value= "Gambia">Gambia</option>
<option value= "Germany">Germany</option>
<option value= "Ghana">Ghana</option>
<option value= "Greece">Greece</option>
<option value= "Guinea Bisau">Guinea Bisau</option>
<option value= "Haiti">Haiti</option>
<option value= "India">India</option>
<option value= "Indonesia">Indonesia</option>
<option value= "Iraq">Iraq</option>
<option value= "Israel">Israel</option>
<option value= "Italy">Italy</option>
<option value= "Jamaica">Jamaica</option>
<option value= "Japan">Japan</option>
<option value= "Kenya">Kenya</option>
<option value= "Liberia">Liberia</option>
<option value= "Libya">Libya</option>
<option value= "Madagascar">Madagascar</option>
<option value= "Malawi">Malawi</option>
<option value= "Mali">Mali</option>
<option value= "Mauritius">Mauritius</option>
<option value= "Mexico">Mexico</option>
<option value= "Monaco">Monaco</option>
<option value= "Morocco">Morocco</option>
<option value= "Mozambique">Mozambique</option>
<option value= "Namibia">Namibia</option>
<option value= "Netherlands">Netherlands</option>
<option value= "New Zealand">New Zealand</option>
<option value= "Nigeria">Nigeria</option>
<option value= "Norway">Norway</option>
<option value= "Portugal">Portugal</option>
<option value= "Qatar">Qatar</option>
<option value= "Russia">Russia</option>
<option value= "Rwanda">Rwanda</option>
<option value= "Saudi Arabia">Saudi Arabia</option>
<option value= "Senegal">Senegal</option>
<option value= "Seychelles">Seychelles</option>
<option value= "Singapore">Singapore</option>
<option value= "South Africa">South Africa</option>
<option value= "Spain">Spain</option>
<option value= "Sudan">Sudan</option>
<option value= "Tanzania">Tanzania</option>
<option value= "Tunisia">Tunisia</option>
<option value= "Turkey">Turkey</option>
<option value= "Uganda">Uganda</option>
<option value= "United Kingdom">United Kingdom</option>
<option value= "United States">United States</option>
<option value= "Venezuela">Venezuela</option>
<option value= "Vietnam">Vietnam</option>
<option value= "Yemen">Yemen</option>
<option value= "Zambia">Zambia</option>
<option value= "Zimbabwe">Zimbabwe</option>
</select>
     </div>
     </div>
     <div class="form-group">
      <label>Username</label><p>
      <input type="text" name="username" id="username"  placeholder="Enter username" required/>
     </div>
     <div class="form-group">
      <label>Password</label><p>
      <input type="password" name="password" id="password" placeholder="Enter password" required/>
     </div>
     <div class="form-group">
      <input type="submit" name="signup" id="signup" value="Submit"  />
     </div>
     <div id="error"></div> 
    </form>
  
    </div>
    </div>
    </body>
    </html>

