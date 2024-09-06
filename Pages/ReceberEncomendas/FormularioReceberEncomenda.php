<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento de Encomenda</title>
    <link rel="stylesheet" href="../../Css/StyleFormReceberEncomenda.css">
</head>
<body>
    <div class="container">
        <h2 class="titulo">Formulário de Recebimento de Encomenda</h2>

        <form action="EncomendaRecebida.php" method="POST">
            <div class="dado">
            <label for="nome">Nome Completo:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco" required><br><br>

            <label for="numero_rastreamento">Número de Rastreamento:</label><br>
            <input type="text" id="numero_rastreamento" name="numero_rastreamento" required><br><br>

            <label for="confirmacao">Confirmar Recebimento:</label><br>
            <select id="confirmacao" name="confirmacao" class="opcoes" required>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select><br><br>
            </div>

            <div>
            <input type="submit" value="Confirmar Recebimento" class="block">
            </div>
        </form>
    </div>

</body>
</html>
