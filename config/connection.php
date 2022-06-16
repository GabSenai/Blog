<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "blog";
 try {
 	  $connect = new PDO("mysql:host=" . $host . "; dbname=" . $db, $user, $pass);
 	  // echo "Conexão realizada com sucesso";
 } catch (Exception $e) {
 	 echo "Erro: " . $e;
 	
 }
?>