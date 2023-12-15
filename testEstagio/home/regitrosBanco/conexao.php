<?php

    $dbHost = 'localhost'; // Host do banco de dados
    $dbUsername = 'root'; // Nome de usuário do banco de dados
    $dbPassword = ''; // Senha do banco de dados
    $dbName = 'imobiliaria'; // Nome do banco de dados

    $con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    if($con->connect_error){
        die("Conexão falhou." . $con->connect_error);
    }

?>