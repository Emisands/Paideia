<?php

	$conexao = mysql_connect ("localhost","root", "");
	mysql_select_db ("paideia");
	
	// Checa conexão
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>