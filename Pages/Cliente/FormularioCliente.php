<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
</head>
<body>
<h1>Digite Seus dados:</h1>
<form action="../EnvioEncomendas/FormualarioEnvioEncomendas.php" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="cpf">CPF:</label><br>
    <input type="text" id="cpf" name="cpf" required><br><br>

    <label for="rg">RG:</label><br>
    <input type="text" id="rg" name="rg" required><br><br>

    <label for="cep">CEP:</label><br>
    <input type="text" id="cep" name="cep" required><br><br>

    <label for="bairro">Bairro:</label><br>
    <input type="text" id="bairro" name="bairro" required><br><br>

    <label for="rua">Rua:</label><br>
    <input type="text" id="rua" name="rua" required><br><br>

    <label for="numero">Número da casa:</label><br>
    <input type="text" id="numero" name="numero" required><br><br>

    <input type="submit" value="Enviar">
</form>
</body>
</html>
