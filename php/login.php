<?php 
 include "config.php";
 ?>
 
<?php
	$email = $_POST['cad-email'];
	$senha = $_POST['cad-pass'];
	$sql = mysql_query("SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
	$row = mysql_num_rows($sql);
	if ($row > 0){
		session_start();
		$email = $_POST['cad-email'];
		$_SESSION['cad-email'] = $_POST['cad-email'];
		$_SESSION['cad-pass'] = $_POST['cad-pass'];
		echo "Login realizado com sucesso";
		$_SESSION['logado'] = true;
		$sql = mysql_query("SELECT id_cadastro FROM cadastro WHERE email='$email'");
		$id_user = mysql_result($sql, 0);
		// $_SESSION['id_login'] = $result[0];
		header("Location: account.html");
	}else{
		header("Location: login.html");
	}
	mysql_close($conexao);
?>