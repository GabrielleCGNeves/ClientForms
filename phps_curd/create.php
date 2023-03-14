<?php

    session_start();
    require_once 'connect.php';

    if(isset($_POST['Enviar'])) {

        $nome = mysqli_escape_string($con,$_POST['nome']);
        $sobrenome = mysqli_escape_string($con,$_POST['sobrenome']);
        $email = mysqli_escape_string($con,$_POST['e-mail']);
        $cpf = mysqli_escape_string($con,$_POST['cpf']);
        $sexo = mysqli_escape_string($con,$_POST['sexo']);
        $usuario = mysqli_escape_string($con,$_POST['user']);
        $senha = mysqli_escape_string($con,$_POST['senha']);

        $sql = "insert into TB_Cliente(cli_nome,cli_sobrenome,cli_email,cli_cpf,cli_sexo,cli_usuario,cli_senha)VALUES('$nome','$sobrenome','$email','$cpf','$sexo','$usuario','$senha')";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso";
        }
        else {
            $_SESSION['mensagem'] = "Não cadastrado com sucesso";
        }
    }





?>