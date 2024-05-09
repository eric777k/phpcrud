
<?php 
    include 'conexao.php';

    // echo "<pre>";
    // print_r($_SERVER);
    // echo"</pre>";
    // exit;

     if($_SERVER['REQUEST_METHOD'] == "POST") {
        //Captura os dados digitados no form e salva em variaveis
        // para facilitar a manipulação dos dados
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nascimento = $_POST['nascimento'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];

        //Vamos abrir a conexao com o banco de dados 
        $conexaoComBanco = abrirBanco();

        //Vamos criar o SQL para realizar o insert dos dados no BD
        $sql = "INSERT INTO pessoas
        (nome, sobrenome, nascimento, endereco, telefone)
        VALUES
        ('$nome', '$sobrenome', '$nascimento', '$endereco', '$telefone')";

        if ($conexaoComBanco->query($sql) === TRUE) {
            echo ":) Sucesso ao cadastrar o contato :)"; 
    
        } else {
            echo ":( Erro ao cadastrar o contato :(";
        }
        fecharBanco($conexaoComBanco);
    
     }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/cadastrar.css">
</head>

<body>
    <div class="paiodin">
    <header>
        <h1>Agenda de Contatos</h1>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastrar.php">Cadastrar</a></li>
    </nav>
    </header>
 <div class="odin">
    <secton>
        <h2>Cadastrar Contato</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nome">Nome</label>
            <input type="text" id="Nome" name="nome" required>

            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome" required>

            <label for="nome">Nascimento</label>
            <input type="date" id="nascimento" name="nascimento" required>

            <label for="nome">Endereco</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="nome">Telefone</label>
            <input type="text" id="telefone" name="telefone" required>

            <button type="submit">Cadastrar</button>
        </form>
    </secton>
    </div>
    </div>
</body>
</html>