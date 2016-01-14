<?php 
			include "config.php";
			session_start(); 
			if((!isset ($_SESSION['cad-email']) == true) and (!isset ($_SESSION['cad-pass']) == true)) 
				{ 
					unset($_SESSION['cad-email']); 
					unset($_SESSION['cad-pass']); 
					header('./login.html'); 
				} 
				$email = $_SESSION['cad-email'];
				$sql = mysql_query("SELECT name, InstID FROM account WHERE email = '$email'");
				while($row = mysql_fetch_array($sql))
					{
				      $nome = $row["name"];
				      $id_instituicao = $row["InstID"];
				    }
				$sql = mysql_query("SELECT name FROM instituicao WHERE instID = '$id_instituicao'");
				while($row = mysql_fetch_array($sql))
					{
				      $nome_inst = $row["name"];
				    }
			?>