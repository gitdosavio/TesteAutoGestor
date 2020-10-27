<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$categoria = $_POST['categoria'];

$result_contato = ("INSERT INTO clientes (nome, telefone, cidade, categoria)VALUES('$nome', '$telefone', '$cidade', '$categoria')");

$resultado_contato = mysqli_query($con, $result_contato);



