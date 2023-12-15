<?php

    include_once "conexao.php";

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO faleComigo(nome, email, celular, mensagem) VALUES ('$nome', '$email', '$celular', '$mensagem')";
    var_dump($sql);

    if($con->query($sql) === TRUE){
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro na inserção do registro:" . $con->error;
    }

    $con->close();

    header("Location: http://localhost/testEstagio/home/home.html#formulario?sucesso=1");
    exit();

?>