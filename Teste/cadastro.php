
<html lang="pt-br">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<head>
    <meta charset="utf-8"/>
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<header id=topo>
        <div class="row" id="logo">
            <div class="col-sm">
                <img src="IMG/logo.png" alt="some text" width=120 height=100>
                
            </div>
        </div>
    </header>
    <nav id="menu">
    <ul>
       <center> <li><a href="index.php">Pesquisar Clientes</a></li>
       <li><a href="cadastro.php">Cadastro de clientes</a></li></center>
       
        
    </ul>
</nav>
    <div id="corpo-cad" >
        <h1>Cadastrar</h1>
        <form method="POST" action="enviar_post.php" id="cadastro">
        <input type="text" name="nome" placeholder="Nome " maxlenght='30' id="divcadastro">
        <input type="text" name="telefone" placeholder="Telefone" maxlenght='40' id="divcadastro">
        <input type="text" name="cidade" placeholder="Cidade" maxlenght='8' id="divcadastro">
        <input type="text" name="categoria" placeholder="categoria" maxlenght='8' id="divcadastro">
        <input type="submit" value="Cadastrar">
        </form>
    </div>


</body>
</html>