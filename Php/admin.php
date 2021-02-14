<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require "config.php";?>
suprimer un livre 
 <input type="text" name="search" id="search">
<p><input type="submit" value="GO"></p>
<?php	
$sql = 'DELETE FROM livre WHERE isbn="$text";';



 ?> suprimer un compte <?php 
 $sql = 'DELETE FROM membre WHERE login="$text";';
 
	$link = mysqli_connect($HOST , $user, $password, $database);
		$req = mysqli_query($link,$sql) or exit('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
		$data = mysqli_fetch_array($req);
		mysqli_free_result($req);
		mysqli_close ($link);	

https://www.topachat.com/pages/configomatic.php?c=i%2F%2FAasq7m%2Bq%2FigvGPg1JXVoTZc2iKxsva7HZDETMT%2BE%3D

		if ($data[0] == 1) {
 echo "le livre a bien ete suprimer";
 }	
?>
</body>
</html>