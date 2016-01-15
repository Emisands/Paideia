<?php

if((!isset ($_SESSION['cad-email']) == true) and (!isset ($_SESSION['cad-pass']) == true)) 
	{ 
		unset($_SESSION['cad-email']); 
		unset($_SESSION['cad-pass']); 
		header('./login.html'); 
	} 
	$email = $_SESSION['cad-email'];

function nameCheck($email) {
	$sql = mysql_query("SELECT name, InstID FROM account WHERE email = '".$email."'");
	$row = mysql_fetch_array($sql);
	return $row['name'];
}
function iduserCheck($email) {
	$sql = mysql_query("SELECT IDUser FROM account WHERE email = '".$email."'");
	$row = mysql_fetch_array($sql);
	return $row['IDUser'];
}
	
function instCheck($name, $email) {
	$sql = mysql_query("SELECT InstID FROM account WHERE email = '".$email."' and name = '".$name."'");
	$row = mysql_fetch_array($sql);
	$id_instituicao = $row['InstID'];

	$sql2 = mysql_query("SELECT name FROM instituicao WHERE instID = '".$id_instituicao."'");
	$row2 = mysql_fetch_array($sql2);
	return $row2['name'];
}

function jobCheck($email) {
	$sql = mysql_query("SELECT tipo_user FROM account WHERE email = '".$email."'");
	$row = mysql_fetch_array($sql);
	return $row['tipo_user'];
}
?>