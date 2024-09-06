<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Token</title>
    <link rel="stylesheet" href="../Css/ReconhecerToken.css">
</head>
<body>

<div class="block">
    <form action="../Php/ReconhecerToken.php" method="post">
        <label for="token">Token:</label>
        <input type="text" id="token" name="token" required>
        <input type="hidden" name="pagina" value="envioDeEncomendas">
        <input type="submit" value="Verificar Token">
    </form>
</div>
</body>
</html>
