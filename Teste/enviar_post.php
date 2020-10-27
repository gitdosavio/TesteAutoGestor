<?php

    $iniciar = curl_init('http://localhost/cURL/processa_cadastro.php');
    curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
    $nomep = $_POST['nome'];
    $telefonep = $_POST['telefone'];
    $cidadep = $_POST['cidade'];
    $categoriap = $_POST['categoria'];

    $dados = array(
        'nome' => $nomep,
        'telefone' => $telefonep,
        'cidade' => $cidadep,
        'categoria' => $categoriap,

    );

    curl_setopt($iniciar, CURLOPT_POST, true);
    curl_setopt($iniciar, CURLOPT_POSTFIELDS, $dados);

    curl_exec($iniciar);

    curl_close($iniciar);
    header("Location: index.php");
