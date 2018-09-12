<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mvule Safaris</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mvule Safaris</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
        	<?php
echo <<<_END
          <h1>Welcome to Mvule Safaris</h1>
_END;
if (isset($_SESSION['role']))
  
   echo " $username, <p>You now logged in.</p>";

else 

echo <<<_END
          <h3>Please <a href="login.php">Log in</a> or <a href="signup.php">Sign up</a></h3>
_END;
?>
          <hr class="intro-divider">
       
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <section class="content-section-a">

      <div class="container">
        <div class="row">
          
            <div class="clearfix"></div>
            <h2 class="section-heading">About Mvule Safaris</h2>
            <p class="lead">Mvule Safaris is a tour company operating in the city of Nairobi. We offer Adventure tours to some of the most prestigious natural attractions in Kenya. <br> The company has been in operation for 10 years, thus having much experience in the tourism industry.

We continue to grow at a rapid rate due to our great value and the awesome experience that we give to all our customers.</p>

<blockquote>

<p>WE DON'T JUST GUIDE PEOPLE TO PLACES; WE HELP CREATE MEMORIES AND AN ULTIMATE EXPERIENCE TO REMEMBER!</p>

</blockquote>
          
        </div>

      </div>
      <!-- /.container -->
    </section>

    
    <!-- Footer -->
    <?php require 'footer_home.php'; ?>

  </body>

</html>