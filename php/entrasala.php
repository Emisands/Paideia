<?php
	include "config.php";
				
	session_start();
	include "functions.php";
					
	if (isset($_POST['class-cod'])) {
		$codigo = $_POST['class-cod'];
		$iduser = iduserCheck($email);
		
	 if (mysql_query("SELECT RID FROM room WHERE RID = ".$codigo.""))
		mysql_query("INSERT INTO lista_membros VALUES (".$codigo.", ".$iduser.")");
	}
	mysql_close($conexao);
	header("Location:classrooms.php");
?>