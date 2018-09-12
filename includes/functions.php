<?php
//connection error mesage
function queryMysql($query)
{
  global $conn;
  $result = $conn->query($query);
  if (!$result) die($conn->error);
  return $result;
}
//Ending Cookie Sessions
function destroySession()
{
  $_SESSION=array();
  if (session_id() != "" || isset($_COOKIE[session_name()]))
  setcookie(session_name(), '', time()-2592000, '/');
  
  session_destroy();
  header("location:index.php");
}
//prevent malicious code injection
function sanitizeString($var)
{
  global $conn;
  $var = strip_tags($var);
  $var = htmlspecialchars($var);
  $var = stripslashes($var);
  return $conn->real_escape_string($var);
}
if (isset($_SESSION['username']))
{
$username = $_SESSION['username'];
$loggedin = TRUE;
$userstr = " ($username)";
}
else $loggedin = FALSE;