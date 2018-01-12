<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>CreatePost</title>	
    </head>
<body>
<?php
	include 'func/base.php';
	$bd=connectSql();
	/*random an array of the numbers*/
	$posEntred=$_POST["positions"];
	$sql="update roles set entred=1 where pos=$posEntred;";
	$vQuery=mysqli_query($bd, $sql);
?>
</body>