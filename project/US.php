<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 770px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<header>
   <h1>City Gallery</h1>
</header>
  
<nav>
  <ul>
    <li><a href="#">London</a></li>
    <li><a href="#">Paris</a></li>
    <li><a href="#">Tokyo</a></li>
  </ul>
</nav>

<article>
<head>
<meta charset="UTF-8">
</head>
  
   <video width="520" height="240" controls>
  <source src="study.mp4" type="video/mp4">
  <source src="study.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video> 
</article>

<footer>Copyright &copy; W3Schools.com</footer>

</div>

</body>
</html>
