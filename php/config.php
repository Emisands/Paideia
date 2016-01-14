<?php

	$conexao = mysql_connect ("localhost","root","");
	mysql_select_db("paideia");
	// Checa conexão
		if (mysql_errno()){
	//if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: ".mysql_error();
    } 
?>