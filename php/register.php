<html>
<head>

<?php
  include "config.php";

  $name= $_REQUEST['name'];
  $email= $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $roomkey= $_REQUEST['roomkey'];
  $teacher= $_REQUEST['teacher'];
  
  $sql = "INSERT INTO register VALUES";
  $sql .= "('$name', '$email', '$password', '$roomkey', '$teacher')";
  $resultado = mysql_query ($sql);

	
	mysql_close($conexao);

/* TA FEITO PARA ABRIR E FECHAR A PAGINA - EM BREVE MUDAR PARA ALERTA */

 ?>
<script>
function CloseMe() 
{
    window.close();
}
</script>
</head>
<body onLoad="CloseMe()">
</body>
</html>