<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /* VERIFICAR CONEXÃO COM O BD

    if($conexao->connect_errno)
    {
        echo "ERRO!";
    }
    else
    {
        echo "Conexão efetuada com sucesso!";
    }

    */
?>