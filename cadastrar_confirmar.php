<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal - Patinhas Felizes</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🐾 Patinhas Felizes</h1>
        <p>Cadastro de Novo Animal para Adoção</p>
    </header>

    <nav>
        <a href="index.php">Início</a>
        <a href="cadastrar.php">Cadastrar Animal</a>
        <a href="listar.php">Animais para Adoção</a>
    </nav>

    <div class="container">
        <div class="card">
            <h2>Formulário de Cadastro</h2>
            
<?php

include 'db.php';

$nome      = $_POST['nome'];
$especie   = $_POST['especie'];
$idade     = $_POST['idade'];
$porte     = $_POST['porte'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO animais (nome, especie, idade, porte, descricao)
        VALUES ('$nome', '$especie', $idade, '$porte', '$descricao')";

if ($conexao->query($sql) === TRUE) {
    echo '<div class="alert sucesso">Animal cadastrado com sucesso!</div>';
} else {
    echo '<div class="alert erro">Erro: ' . $conexao->error . '</div>';
}

?>

        </div>
    </div>

    <footer>
        <p>&copy; 2026 Patinhas Felizes - Programação Web 2 | Curso Técnico em Informática | IFBA Campus Ilhéus</p>
    </footer>

</body>
</html>