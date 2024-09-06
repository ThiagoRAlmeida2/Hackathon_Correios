<?php
session_start();

// Função para verificar se o token é válido
function verificarToken($token, $tipo) {
    // Verifica se o token começa com a letra correta e o número é maior que 0
    if (substr($token, 0, 1) === $tipo && is_numeric(substr($token, 1)) && (int)substr($token, 1) > 0) {
        return true;
    }
    return false;
}

// Define a página para onde o usuário será redirecionado
$paginaRedirecionar = '';
$mensagem = '';

if (isset($_POST['token']) && isset($_POST['pagina'])) {
    $token = $_POST['token'];
    $pagina = $_POST['pagina'];

    switch ($pagina) {
        case 'envioDeEncomendas':
            $tipo = 'E';
            $paginaRedirecionar = '../Pages/PaginasSeguintes/FormularioCliente.php';
            break;
        case 'receberEncomendas':
            $tipo = 'R';
            $paginaRedirecionar = '../Pages/PaginasSeguintes/FormularioReceberEncomenda.php';
            break;
        default:
            $mensagem = 'Página inválida.';
            $paginaRedirecionar = '../Pages/ReconhecerTokenPage.php'; // Redireciona para a página de verificação com a mensagem
            break;
    }

    if (empty($mensagem)) {
        if (verificarToken($token, $tipo)) {
            // Redireciona para a página apropriada se o token for válido
            header("Location: $paginaRedirecionar");
            exit();
        } else {
            // Define a mensagem de erro e redireciona de volta para a página de verificação
            $mensagem = 'Token inválido.';
            $paginaRedirecionar = '../Pages/ReconhecerTokenPage.php';
        }
    } else {
        // Redireciona para a página de verificação com a mensagem de erro
        $paginaRedirecionar = '../Pages/ReconhecerTokenPage.php';
    }

    // Redireciona para a página HTML com a mensagem na URL, se aplicável
    if (!empty($mensagem)) {
        header("Location: $paginaRedirecionar?mensagem=" . urlencode($mensagem));
        exit();
    }
} else {
    // Define a mensagem de erro e redireciona para a página de verificação
    $mensagem = 'Token ou página não especificados.';
    $paginaRedirecionar = '../Pages/ReconhecerTokenPage.php';
    header("Location: $paginaRedirecionar?mensagem=" . urlencode($mensagem));
    exit();
}
?>
