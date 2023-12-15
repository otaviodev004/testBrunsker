<?php

    include_once "conexao.php";

    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cadCliente(nome, celular, email, senha) VALUES ('$nome', '$celular', '$email', '$senha')";

    if($con->query($sql) === TRUE){
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro na inserção do registro:" . $con->error;
    }

    $con->close();

    header("Location: http://localhost/testEstagio/home/loguinCliente.html");
    exit();


?>