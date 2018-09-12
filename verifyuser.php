<?php

include 'db_connection.php';

if (isset($_POST['username']))
{
$user = sanitizeString($_POST['username']);
$result = mysqli_query("SELECT users.username,adminusers.username FROM users,adminusers");
if ($result->num_rows)
echo "<span class='taken'>&nbsp;&#x2718; "  .
"This username is taken</span>";
else
echo "<span class='available'>&nbsp;&#x2714; "  .
"This username is available</span>";
}
?>