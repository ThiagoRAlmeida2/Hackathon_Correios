<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento de Encomenda</title>
    <!-- Falta Style -->

</head>
<body>

<h1>Formulário de Recebimento de Encomenda</h1>

<form action="EncomendaRecebida.php" method="POST">
    <label for="nome">Nome Completo:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="endereco">Endereço:</label><br>
    <input type="text" id="endereco" name="endereco" required><br><br>

    <label for="numero_rastreamento">Número de Rastreamento:</label><br>
    <input type="text" id="numero_rastreamento" name="numero_rastreamento" required><br><br>

    <label for="confirmacao">Confirmar Recebimento:</label><br>
    <select id="confirmacao" name="confirmacao" required>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
    </select><br><br>

    <input type="submit" value="Confirmar Recebimento">
</form>

</body>
</html>
