<?php
         $host = 'localhost';
         $user = 'root';
         $senha = '';
         $bd = 'restaurante';
         
         $mysqli = new mysqli($host,$user,$senha,$bd);
         if($mysqli->connect_errno){
               error_log('Erro ao conectar ao banco de dados' . $mysqli->connect_error);
         }
?>