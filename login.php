<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

 if ($login == "chupetinha" && $senha == "chupetao"){
    header('location: principal.php');
 } else {
    header ('location: index.php');
     
 }

?>
