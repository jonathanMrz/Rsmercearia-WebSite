<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = 'rsmercearia';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
    if ($conexao -> connect_errno){
        echo 'erro';
    }
    else{
        echo 'conexão efetuada com sucesso';
    }
?>