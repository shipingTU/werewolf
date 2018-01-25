<?php
	include 'base.php';
	$bd=connectSql();
	$sql="update roles set used=0,pos=NULL,entred=0;";
	$vQuery=mysqli_query($bd, $sql);
	mysqli_close($bd);
?>