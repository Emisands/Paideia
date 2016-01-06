<html>
<head>

<?php
  include "config.php";

  $name= $_REQUEST['name'];
  $email= $_REQUEST['email'];
  $roomkey= $_REQUEST['roomkey'];
  $teacher= $_REQUEST['teacher'];
  
  $sql = "INSERT INTO register VALUES";
  $sql .= "('$name', '$email', '$roomkey', '$teacher')";
  $resultado = mysql_query ($sql);

	
	mysql_close($conexao);
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