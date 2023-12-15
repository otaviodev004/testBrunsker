<?php

    include_once "conexao.php";

    $cep = $_POST['cep'];
    $nomeRua = $_POST['nomeRua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $valor = $_POST['valor'];
    $imagem = $_POST['imagem'];

    $sql = "INSERT INTO cadVendedor(cep, nomeRua, numero, complemento, celular, email, valor, imagem) VALUES ('$cep', '$nomeRua', '$numero', '$complemento', '$celular', '$email', '$valor', '$imagem')";

    if($con->query($sql) === TRUE){
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro na inserção do registro:" . $con->error;
    }

    $con->close();

    header("Location: http://localhost/testEstagio/home/loguinVendedores.html");
    exit();

?>