<html>
<head>

<?php
    include "config.php";
    session_start();
    include "functions.php";

    if (isset($_POST['room-name'])) {
      $rname = $_POST['room-name'];
    }
    if (isset($_POST['room-inst'])) {
      $instid = $_POST['room-inst'];
    }  
    
    $consulta = mysql_query("SELECT max(RID) FROM room");

    while($row = mysql_fetch_array($consulta)){
      $newrid = $row["max(RID)"];
    }

    if ($newrid == NULL)
      $newrid = 0;
    else ++$newrid;

    $iduser = iduserCheck($email);

    $sql = "INSERT INTO room VALUES (".$newrid.", '".$rname."', ".$iduser.",".$instid.")";
    $resultado = mysql_query ($sql);

	

	 mysql_close($conexao);
   echo "<script> alert('Sala criada com sucesso!'); </script>";
   header("Location: classrooms.php");

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