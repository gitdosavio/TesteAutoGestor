<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM clientes WHERE nome LIKE '%$usuarios%' LIMIT 20";
$resultado_user = mysqli_query($con, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	$dados = '<div class="table-responsive">
		<table class="table bordered">
		<thead class="thead-dark">
		<tr>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Cidade</th>
			<th>Categoria</th>
		</tr>
		</thead>
		
	';
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		$dados .= '
			<tr>
				<td>'.$row_user["nome"].'</td>
				<td>'.$row_user["telefone"].'</td>
				<td>'.$row_user["cidade"].'</td>
				<td>'.$row_user["categoria"].'</td>
			</tr>
		';
		

	}
}else{ $dados = "Nenhum registro localizado.";
}

echo $dados;