<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Token</title>
    <link rel="stylesheet" href="../../Css/ReconhecerToken.css">

</head>
<body>
    <div class="container">
        <h1>Verificar Token</h1>
        <form action="TokenEnvioEncomendas.php" method="post">
            <label for="token">Digite o Token:</label>
            <input type="text" id="token" name="token" required>
            <button type="submit">Verificar</button>
        </form>
    </div>
</body>
</html>
