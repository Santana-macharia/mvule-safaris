<?php
echo <<<_END
<div id="search">
  <form action = 'search.php?go' method = 'GET'> 
   <input type = 'text' size='20' name = 'query'> 
    <input type = 'submit' name = 'submit' value = 'Search' class='buttons'> 
  </form>
</div>
_END;

if (isset($_SESSION['role']))
{
  if ($_SESSION['role'] == 1) {
    echo ("<br><div id='nav'><ul>"  .
        "<li><a href='users.php'>Home</a></li>"  .
        "<li><a href='employer.php'>Applied Projects</a></li>"  .
        "<li><a href='logout.php'>Log Out</a></li></ul></div><br><br>");
       
  }elseif ($_SESSION['role'] == 2) {
    echo ("<br><div id='nav'><ul>"  .
        "<li><a href='employer.php'>Home</a></li>"  .
        "<li><a href='applied_projects.php'>View Projects</a></li>"  .
        "<li><a href='regproject.php'>Add Project</a></li>"  .
        "<li><a href='employer.php'>Edit Project</a></li>"  .
        "<li><a href='empEditprofile.php'>Edit Profile</a></li>"  .
        "<li><a href='logout.php'>Log Out</a></li></ul></div><br><br>");
  }elseif ($_SESSION['role'] == 3) {
    echo ("<br><div id='nav'><ul>"  .
        "<li><a href='student.php'>Home</a></li>"  .
        "<li><a href='stdProfile.php'>Edit Profile</a></li>"  .
        "<li><a href='acceptedoffers.php'>Accepted Offers</a></li>"  .
        "<li><a href='logout.php'>Log Out</a></li></ul></div><br><br>");
  }
}else{
		echo ("<br><div id='nav'><ul>"  .
		    "<li><a href='index.php'>Home</a></li>"  .
		    "<li><a href='signup.php'>Sign Up</a></li>"  .
		    "<li><a href='login.php'>Log In</a></li></ul></div><br><br>");
}
?>
