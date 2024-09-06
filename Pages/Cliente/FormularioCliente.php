<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link rel="stylesheet" href="../../Css/StyleCliente.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Formulário de Cadastro</h2>

        <form action="../EnvioEncomendas/FormualarioEnvioEncomendas.php" method="POST">

            <div class="dado">
                <label for="nome" class="dado">Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="cpf" class="dado">CPF:</label><br>
                <input type="text" id="cpf" name="cpf" required><br><br>

                <label for="bairro" class="dado">Bairro:</label><br>
                <input type="text" id="bairro" name="bairro" required><br><br>

                <label for="numero_casa" class="dadoDireita">N° da Casa:</label><br>
                <input type="text" id="numero_casa" name="numero_casa" required><br><br>

                <label for="rg" class="dado">RG:</label><br>
                <input type="text" id="rg" name="rg" required><br><br>

                <label for="cep" class="dado">CEP:</label><br>
                <input type="text" id="cep" name="cep" required><br><br>

                <label for="rua" class="dado">Rua:</label><br>
                <input type="text" id="rua" name="rua" required><br><br>
            </div>

            <div>
                <input type="submit" value="Enviar" class="block">
            </div>
        </form>
    </div>
</body>
</html>
