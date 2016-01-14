<?php
 
function session_checker(){
 
    if (!isset($_SESSION['cad-email'])){
 
        header ("Location:login.php");
        exit(); 
 
    }
 
}
 
?>