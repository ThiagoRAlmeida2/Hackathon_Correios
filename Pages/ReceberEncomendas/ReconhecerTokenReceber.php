<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Token</title>
    <script>
        function redirecionar() {
            window.location.href = 'FormularioReceberEncomenda.php';
        }
    </script>
</head>
<body>
<h1>Verificar Token</h1>
<form id="verificarForm" action="TokenReceberEncomendas.php" method="post" onsubmit="redirecionar(); return false;">
    <label for="token">Digite o Token:</label>
    <input type="text" id="token" name="token" required>
    <button type="submit">Verificar</button>
</form>
</body>
</html>
