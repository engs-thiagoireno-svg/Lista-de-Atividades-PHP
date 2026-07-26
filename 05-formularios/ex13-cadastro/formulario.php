<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>

    <form action="cartao.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento" required><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" name="cidade" id="cidade" required><br><br>

        <label for="estado">Estado:</label><br>
        <input type="text" name="estado" id="estado" required><br><br>

        <label>Sexo:</label><br>
        <input type="radio" name="sexo" value="Masculino" id="masculino" required>
        <label for="masculino">Masculino</label>
        <input type="radio" name="sexo" value="Feminino" id="feminino">
        <label for="feminino">Feminino</label>
        <input type="radio" name="sexo" value="Outro" id="outro">
        <label for="outro">Outro</label><br><br>

        <label for="curso">Curso:</label><br>
        <input type="text" name="curso" id="curso" required><br><br>

        <label for="observacoes">Observações:</label><br>
        <textarea name="observacoes" id="observacoes" rows="4"></textarea><br><br>

        <button type="submit">Enviar Cadastro</button>
    </form>
</body>
</html>