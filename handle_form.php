<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content type" concent="text/html; charset=utf- 8"/>
	
	<title>your feedback</title>
	
</head>
<body>

<?php

ini_set ('display_errors', 1);

error_reporting ( E_ALL | E_STRICT);
$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

print "<p> thank you, $title $name, for your comment. </p>
<p>You stated that you found this example to be '$response' and added:<br />$comments</p>";

?>
  <!-- this script looks like the same as garry's original script. But the page display incorrectly-->
</body>
</html>	