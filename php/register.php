<html>
<head>

<?php
  $password = $_POST['cad-pass'];
  $confpass = $_POST['cad-cpass'];

  if ($password == $confpass) {

    include "config.php";


    if (isset($_POST['cad-name'])) {
      $name = $_POST['cad-name'];
    }
    if (isset($_POST['cad-email'])) {
      $email = $_POST['cad-email'];
    }
    if (isset($_POST['cad-pass'])) {
      $password = $_POST['cad-pass'];
    }
    if (isset($_POST['reg-priority'])) {
      $tipouser = $_POST['reg-priority'];
    }
    if (isset($_POST['cad-inst'])) {
      $instid = $_POST['cad-inst'];
    }  
    
    $consulta = mysql_query("SELECT max(IDuser) FROM account");

    while($row = mysql_fetch_array($consulta)){
      $newid = $row["max(IDuser)"];
    }

    if ($newid == NULL)
      $newid = 0;
    else ++$newid;


    $sql = "INSERT INTO account VALUES";
    $sql .= "('$email', '$name', '$password','$newid','$tipouser', '$instid')";
    $resultado = mysql_query ($sql);

	
	 mysql_close($conexao);
   echo "<script> alert('Usuário cadastrado com sucesso!'); history.back(); </script>";
  }

  else echo "<script> alert('Senhas não conferem'); history.back(); </script>";

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