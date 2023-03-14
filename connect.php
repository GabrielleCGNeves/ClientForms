<?php
    $server_name = 'localhost';
    $user_name = 'etecia';
    $password = '123456';
    $db_name = 'bd_client';
    

    $con = mysqli_connect($server_name, $user_name, $password, $db_name);

    mysqli_set_charset($con, "utf8");
        if(mysqli_connect_errno($con)){
            echo "Erro ao conectar com o banco de dados " . mysqli_connect_error();
       } 
?>