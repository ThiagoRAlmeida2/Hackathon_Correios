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

<!-- Essa pagina é um formualario que pede os dados de envio e salva no BD-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Encomendas</title>
    <link rel="stylesheet" href="../../Css/generalStyle.css">
</head>
<body>

    <div class="container">
        <h2 class="titulo">Dados da Encomenda</h2>

        <form action="../../Php/FinalizarEnvioEncomendas.php" method="POST">
            <label for="descricao" class="dado">Descrição da Encomenda:</label>
            <input type="text" id="descricao" name="descricao" required><br><br>

            <label for="peso" class="dado">Peso da Encomenda (kg):</label>
            <input type="text" id="peso" name="peso" required><br><br>

            <label for="destino" class="dado">Endereço de Destino:</label>
            <input type="text" id="destino" name="destino" required><br><br>

            <input type="submit" value="Finalizar" class="block">
        </form>
    </div>

</body>
</html>
