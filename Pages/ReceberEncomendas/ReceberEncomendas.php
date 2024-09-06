<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Token De Envio de Encomendas</title>
    <script>
        function redirecionar(token) {
            // Adiciona o token como parâmetro na URL
            window.location.href = 'Pages/ReconhecerTokenPage.php?token=' + encodeURIComponent(token);
        }
    </script>
</head>
<body>
<?php
// Caminho para o arquivo de contador dentro da pasta Contador
$pastaContador = 'Contador';
$contadorArquivo = $pastaContador . '/contador1.txt';

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

    // Gera o token no formato R001, R002, etc.
    $token = 'R' . str_pad($novoNumero, 3, '0', STR_PAD_LEFT);

    // Salva o token completo no arquivo
    file_put_contents($arquivo, $token);

    return $token;
}

// Gera o token
$token = gerarToken($contadorArquivo);
?>

<p>Token gerado: <?php echo htmlspecialchars($token); ?></p>
<p>Siga para o setor 2</p>
<button onclick="redirecionar('<?php echo htmlspecialchars($token); ?>')">Continuar</button>
</body>
</html>
