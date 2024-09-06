<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Token De Envio de Encomendas</title>
    <!-- Falta Style -->
    <script>
        function redirecionar() {
            // Adiciona o token como parâmetro na URL
            const token = document.getElementById('token').textContent.trim();
            window.location.href = '../EnvioEncomendas/ReconhecerTokenEnvio.php';
        }
    </script>
</head>
<body>
<?php
// Caminho para o arquivo de contador dentro da pasta Contador
$pastaContador = 'Contador';
$contadorArquivo = $pastaContador . '/contador.txt';

// Garante que a pasta Contador exista
if (!file_exists($pastaContador)) {
    mkdir($pastaContador, 0777, true);
}

// Função para gerar o próximo token
function gerarToken($arquivo) {
    // Lê o último número do arquivo
    if (file_exists($arquivo)) {
        $ultimoToken = trim(file_get_contents($arquivo));
        $ultimoNumero = (int) substr($ultimoToken, 1);
    } else {
        $ultimoNumero = 0;
    }

    // Incrementa o número
    $novoNumero = $ultimoNumero + 1;

    // Gera o token no formato E001, E002, etc.
    $token = 'E' . str_pad($novoNumero, 3, '0', STR_PAD_LEFT);

    // Salva o token completo no arquivo
    file_put_contents($arquivo, $token);

    return $token;
}

// Gera o token e exibe
$token = gerarToken($contadorArquivo);
?>

<p>Token gerado: <span id="token"><?php echo htmlspecialchars($token); ?></span></p>
<p>Siga para o setor 1</p>
<button onclick="redirecionar()">Continuar</button>
</body>
</html>
