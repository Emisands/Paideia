<?php
    include "config.php";
        
    session_start();


    $questtittle = $_POST['quest-tittle'];

    $questmessage = $_POST['quest-message'];
    

    $consulta = mysql_query("SELECT max(QID) FROM questions");

    while($row = mysql_fetch_array($consulta)){
      $newqid = $row["max(QID)"];
    }

    if ($newqid == NULL)
      $newqid = 1;
    else ++$newqid;

    $consulta = mysql_query("SELECT max(FID) FROM form");

    while($row = mysql_fetch_array($consulta)){
      $newfid = $row["max(FID)"];
    }

    if ($newfid == NULL)
      $newfid = 1;
    else ++$newfid;

    $sql = "INSERT INTO form VALUES (".$newfid.", '$questtittle', 0)";
    $resultado = mysql_query ($sql);

    $sql = "INSERT INTO questions VALUES (".$newqid.", '$questmessage', ".$newfid.", 's/ imagem')";
    $resultado = mysql_query ($sql);

    
    for ($i = 1; $i <=5; $i++)
      {
   
        $correto = $_POST['reg-priority'];
        $text = $_POST['altern-0'.$i.''];


        if ($correto == $i){
           $sql = "INSERT INTO answers VALUES (".$i.", 1, '$text', ".$newqid.", ".$newfid.")";
           $resultado = mysql_query ($sql);
        }
        else {
           $sql = "INSERT INTO answers VALUES (".$i.", 0, '$text', ".$newqid.", ".$newfid.")";
           $resultado = mysql_query ($sql);
        }

     }

	
	  mysql_close($conexao);
    header("Location: questionnaire.php");
  



 ?>