<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<?php include("style.css"); ?>
<title> harjutus-3 </title>
</head>
<body> <php print_r() 
?>

<form action="form_processing.php" method="post"> 
<span> kasutajanimi </span>
	<input type="text" name="username">	</input> <br>
	<span> parool </span>
   <input type="password" name="password"> </input> <br>
<input type="submit" name="submit" value="Saada"> </input>

</form>

</body>
</html> 