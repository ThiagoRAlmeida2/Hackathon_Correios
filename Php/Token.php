<?php
session_start();

// Função que gera o token com base na página
function gerarToken($contador) {
    // Verifica se já existe um contador
    if (!isset($_SESSION[$contador])) {
        $_SESSION[$contador] = 1;
    } else {
        $_SESSION[$contador]++;
    }

    // Gera o token com a letra correspondente e o número incrementado
    return $contador . str_pad($_SESSION[$contador], 5, '0', STR_PAD_LEFT); // Ex: E00001, R00001, P00001
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
