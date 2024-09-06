<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $numero_rastreamento = htmlspecialchars($_POST['numero_rastreamento']);
    $confirmacao = htmlspecialchars($_POST['confirmacao']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado pela Preferência</title>
    <link rel="stylesheet" href="../../Css/StyleEncomendaRecebida.css">
</head>
<body>

<div class="container">
    <h1>Obrigado pela Preferência, <?php echo $nome; ?>!</h1>

    <p>Seu pedido foi confirmado com sucesso.</p>
    <p>Endereço de entrega: <?php echo $endereco; ?></p>
    <p>Número de Rastreamento: <?php echo $numero_rastreamento; ?></p>
    <p>Confirmação de Recebimento: <?php echo ($confirmacao === 'sim') ? 'Recebido' : 'Não Recebido'; ?></p>

    <p style="color:#0071AD;">Agradecemos pela sua preferência e confiança em nossos serviços. Esperamos atendê-lo(a) novamente em breve!</p>

    <!-- Botão "Concluir" -->
    <form action="../../initalPage.html" method="get">
        <button type="submit" class="block">Concluir</button>
    </form>
</div>

</body>
</html>

