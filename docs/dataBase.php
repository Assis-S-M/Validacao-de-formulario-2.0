<?php

    $conexao = mysqli_connect("localhost", "root", "", "formulario");
    mysqli_set_charset($conexao, 'utf8');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $num = $_POST['numRes'];
    $bairro = $_POST['bairro'];
    $comp = $_POST['comp'];
    $municipio = $_POST['municipio'];
    $telFix = $_POST['telFix'];
    $telCel = $_POST['telCel'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    mysqli_query($conexao, "INSERT INTO pessoafisica (id, nome, cpf, cep, rua, numero, bairro, complemento, telFix, telCel, email, senha) VALUES (default, '$nome', '$cpf', '$cep', '$rua', '$num', '$bairro', '$comp', '$telFix', '$telCel', '$email', '$senha')");

?>