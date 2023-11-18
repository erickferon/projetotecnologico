<?php
    if(isset($_POST['submit'])){

        /* VERIFICAR ENVIO DOS DADOS AO SUBMITAR
        print_r($_POST['nome']);
        print_r($_POST['idade']);
        print_r($_POST['sexo']);
        print_r($_POST['cidade']);
        print_r($_POST['estado']);
        print_r($_POST['mensagem']);
        */
        
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $mensagem = $_POST['mensagem'];

        $result = mysqli_query($conexao, "INSERT INTO contato(nome, idade, sexo, cidade, estado, mensagem) 
        VALUES ('$nome', '$idade', '$sexo', '$cidade', '$estado', '$mensagem')");
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css"/>
    <!--Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=VT323&display=swap" rel="stylesheet">
    <!--Lobster-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@300&family=VT323&display=swap" rel="stylesheet">
    <title>Formulário</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="./index.html">
                <img src="./img/logo.png" alt="logo">
            </a>
            <div class="logo-txt">
                <h1 class="logo-txt-1">Trips</h1>
                <h1 class="logo-txt-2">do Cerrado</h1>
            </div>
        </div>
    </header>

    <main>
        <section class="formulario">
            <h1>Mensagem</h1>
            <form method="POST" action="formulario.php">
                <div class="campos">
                    <div class="labels">
                        <label for="nome" id="l1">Nome:</label>
                        <label for="idade" id="l2">Idade:</label>
                        <label for="sexo" id="l3">Sexo:</label>
                        <label for="cidade" id="l4">Cidade:</label>
                        <label for="estado" id="l5">Estado:</label>
                    </div>
                    <div class="inputs">
                        <input type="text" name="nome" id="nome">
                        <input type="text" name="idade" id="idade">
                        <input type="text" name="sexo" id="sexo">
                        <input type="text" name="cidade" id="cidade">
                        <input type="text" name="estado" id="estado">
                    </div>
                </div>
                <div class="mensagem">
                    <div class="label">
                        <label for="mensagem" id="l6">Mensagem:</label>
                    </div>
                    <div class="text">
                        <textarea rows="7" cols="50" maxlength="1000" name="mensagem" id="mensagem"></textarea>
                    </div>
                </div>
            
                <div class="botoes">
                    <input type="submit" name="submit" class="botao-enviar" value="Enviar">
                </div>
            </form>
        </section>
    </main>
</body>
</html>