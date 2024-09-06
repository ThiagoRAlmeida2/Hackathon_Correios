<?php
// Recebe os dados da encomenda enviados pelo formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $peso = $_POST['peso'];
    $destino = $_POST['destino'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação</title>
    <!-- Falta Style -->
</head>
<body>

<h2>Encomenda Registrada com Sucesso!</h2>

<p>Descrição: <?php echo htmlspecialchars($descricao); ?></p>
<p>Peso: <?php echo htmlspecialchars($peso); ?> kg</p>
<p>Destino: <?php echo htmlspecialchars($destino); ?></p>

<!-- Botão "Concluir" -->
<form action="../initalPage.html" method="get">
    <button type="submit">Concluir</button>
</form>

</body>
</html>
