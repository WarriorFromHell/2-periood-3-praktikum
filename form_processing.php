<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title> harjutus-3</title>
</head>
<body >
<pre><?php

print_r($_POST)
?>
</pre>
<p> GONGRATS DUDE </p>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];
?>
<?php echo "Tere {$username}! Teie parool on {$password}"; ?>

<?php
//  if (isset($_POST["username"])) {
//    $username = $_POST["username"];
//  } else {
//    $username = "puudub";
//  }

// if (isset($_POST["password"])) {
//    $password = $_POST["password"];
//  } else {
//    $password = "puudub";
//  }

$username = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub" ;
?>
<?php $password = isset($_POST["password"]) ? ($_POST["password"]) : "Puudub" ;
?>



</body>
</html>