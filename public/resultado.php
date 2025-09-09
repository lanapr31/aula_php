<?php
// Captura os dados enviados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
</head>
<body>
    <h2>Cadastro realizado!</h2>
    <p>Nome: <?php echo htmlspecialchars($nome); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($email); ?></p>
</body>
</html>
