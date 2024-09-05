<?php
session_start();

// Função que gera o token com base na página
function gerarToken($tipo) {
    // Verifica se já existe um contador para o tipo específico
    if (!isset($_SESSION[$tipo])) {
        $_SESSION[$tipo] = 1; // Inicia o contador
    } else {
        $_SESSION[$tipo]++; // Incrementa o contador
    }

    // Gera o token com a letra correspondente e o número incrementado
    return $tipo . str_pad($_SESSION[$tipo], 5, '0', STR_PAD_LEFT); // Ex: E00001, R00001, P00001
}

// Verifica de qual página o pedido foi feito e gera o token correspondente
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];

    switch ($pagina) {
        case 'envioDeEncomendas':
            $token = gerarToken('E');
            break;
        case 'receberEncomendas':
            $token = gerarToken('R');
            break;
        case 'problemas':
            $token = gerarToken('P');
            break;
        default:
            $token = 'Página inválida';
            break;
    }

    echo "Seu token é: " . $token;
} else {
    echo "Página não especificada.";
}
?>
