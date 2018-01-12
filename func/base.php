<?php
//Connection à la base de donnée
function connectSql()
{
	$vHost = "localhost";
	$vDbname = "werewolf";
	$vUser = "werewolf";
	$vPassword = "werewolf";
	$vConn = mysqli_connect($vHost, $vUser, $vPassword, $vDbname);
	if (!$vConn){
		die('Impossible de se connecter : ' . mysqli_connect_error());
	}
	// Changer les caracteres a utf8
	mysqli_set_charset($vConn,"utf8");
	return $vConn;
}
?>