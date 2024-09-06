<?php

include 'BD/Conexão.php'; // Inclui o arquivo de conexão com o BD

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero_casa = $_POST['numero_casa'];
    $rg = $_POST['rg'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, cpf, cep, bairro, rua, numero_casa, rg) 
            VALUES (:nome, :cpf, :cep, :bairro, :rua, :numero_casa, :rg)";

    $stmt = $pdo->prepare($sql);

    // Faz o bind dos parâmetros
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':cep', $cep);
    $stmt->bindParam(':bairro', $bairro);
    $stmt->bindParam(':rua', $rua);
    $stmt->bindParam(':numero_casa', $numero_casa);
    $stmt->bindParam(':rg', $rg);

    // Executa a consulta
    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário.";
    }
}
?>