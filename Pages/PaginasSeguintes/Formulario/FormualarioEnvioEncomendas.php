<?php
// Recebe os dados do usuário enviados pelo formulário anterior (opcionalmente, você pode salvar os dados no banco aqui)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $rg = $_POST['rg'];

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Encomendas</title>
</head>
<body>

<h2>Dados da Encomenda</h2>

<form action="finalizar.php" method="POST">
    <label for="descricao">Descrição da Encomenda:</label>
    <input type="text" id="descricao" name="descricao" required><br><br>

    <label for="peso">Peso da Encomenda (kg):</label>
    <input type="text" id="peso" name="peso" required><br><br>

    <label for="destino">Endereço de Destino:</label>
    <input type="text" id="destino" name="destino" required><br><br>

    <input type="submit" value="Finalizar">
</form>

</body>
</html>
