<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$data_nascimento = $_POST["data_nascimento"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$sexo = $_POST["sexo"];
$curso = $_POST["curso"];
$observacoes = $_POST["observacoes"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cartão de Cadastro</title>
    <style>
        .cartao {
            max-width: 400px;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .cartao h2 {
            margin-top: 0;
        }
        .cartao p {
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <div class="cartao">
        <h2>Cartão de Cadastro</h2>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>
        <p><strong>Data de Nascimento:</strong> <?php echo $data_nascimento; ?></p>
        <p><strong>Cidade:</strong> <?php echo $cidade; ?></p>
        <p><strong>Estado:</strong> <?php echo $estado; ?></p>
        <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>
        <p><strong>Curso:</strong> <?php echo $curso; ?></p>
        <p><strong>Observações:</strong> <?php echo $observacoes; ?></p>
    </div>

    <br>
    <a href="formulario.php">Novo Cadastro</a>
</body>
</html>