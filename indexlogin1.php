<?php 
// Start a session
session_start();
require_once ('dbconnect.php');
require_once ("functions.inc.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Simple Login tutorial</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
include "login.php";
?>
</body>
</html>