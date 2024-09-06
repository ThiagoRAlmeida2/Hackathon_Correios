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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #008080;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        .agradecimento {
            background-color: #e0ffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        button {
            background-color: #008080;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #005f5f;
        }
    </style>
</head>
<body>

<div class="agradecimento">
    <h1>Obrigado pela Preferência, <?php echo $nome; ?>!</h1>

    <p>Seu pedido foi confirmado com sucesso.</p>
    <p>Endereço de entrega: <?php echo $endereco; ?></p>
    <p>Número de Rastreamento: <?php echo $numero_rastreamento; ?></p>
    <p>Confirmação de Recebimento: <?php echo ($confirmacao === 'sim') ? 'Recebido' : 'Não Recebido'; ?></p>

    <p>Agradecemos pela sua preferência e confiança em nossos serviços. Esperamos atendê-lo(a) novamente em breve!</p>

    <!-- Botão "Concluir" -->
    <form action="index.php" method="get">
        <button type="submit">Concluir</button>
    </form>
</div>

</body>
</html>

