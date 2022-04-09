<?php
    $dbHost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'login';
    
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Erro ao conectar com banco de dados');

?>