<?php
$output=NULL;

if(isset($_POST['submit']))
{
//connect to database
$mysqli = NEW mysqli("localhost","root","","project");

$search = $mysqli->real_escape_string($_POST['search']);

//query the database
$resultset= $mysqli->query("SELECT degreeportalcoarseid.COARSENAME AS COARSENAME,
	degreeportal.UNIVERSITY AS UNIVERSITY 
	FROM degreeportalcoarseid,degreeportal
	WHERE degreeportalcoarseid.COARSENAME='$search' AND degreeportal.COARSEID = degreeportalcoarseid.COARSEID");

	while($rows= $resultset->fetch_assoc() )
	{
		$degreeportalcoarseid=$rows['COARSENAME'];
		$degreeportal = $rows['UNIVERSITY'];

		$output .= "<p>COARSE: $coarse<br />UNIVERSITY: $university</p>";
	}

}
	?>
 <form method="POST">
 <input type="TEXT" name="search"/>
 <input type="SUBMIT" name="submit" value="Search"/>
 </form>

 <?php echo $output; ?>



































$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'project';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>