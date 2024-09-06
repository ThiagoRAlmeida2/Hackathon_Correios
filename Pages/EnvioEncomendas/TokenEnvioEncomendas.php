<?php
// Caminho para o arquivo de contador dentro da pasta Contador
$pastaContador = 'Contador/';
$contadorArquivo = $pastaContador . 'contador.txt';

// Função para verificar se o token existe no arquivo
function verificarToken($token, $arquivo) {
    // Lê o conteúdo do arquivo
    if (file_exists($arquivo)) {
        $tokenNoArquivo = trim(file_get_contents($arquivo));

        // Compara o token inserido com o token no arquivo
        if ($token === $tokenNoArquivo) {
            // Token válido, redireciona para FormularioCliente.php
            header('Location: Pages/PaginasSeguintes/Formulario/FormularioCliente.php');
            exit();
        } else {
            // Token inválido
            echo 'Token inválido. Por favor, verifique e tente novamente.';
        }
    } else {
        echo 'Arquivo de contador não encontrado.';
    }
}

// Verifica se o token foi enviado pelo formulário
if (isset($_POST['token'])) {
    $token = $_POST['token'];
    verificarToken($token, $contadorArquivo);
} else {
    echo 'Nenhum token fornecido.';
}
?>
