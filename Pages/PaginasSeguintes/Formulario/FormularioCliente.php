<!-- Essa pagina é um formualario que pede os dados dos usuarios e salva no BD-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Envio</title>
</head>
<body>
<h1>Formulário de Cadastro</h1>
<form action="../../../BD/SalvarDadosCliente.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required><br><br>

    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep" required><br><br>

    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="bairro" required><br><br>

    <label for="rua">Rua:</label>
    <input type="text" id="rua" name="rua" required><br><br>

    <label for="numero_casa">Número da Casa:</label>
    <input type="text" id="numero_casa" name="numero_casa" required><br><br>

    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg" required><br><br>

    <input type="submit" value="Enviar">

</form>
</body>
</html>
