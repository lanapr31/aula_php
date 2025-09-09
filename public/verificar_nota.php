<?php
$nota = 8; 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <title>Resultado da Nota</title>
</head>
<body>
    <h1>Resultado da Avaliação</h1>

    <?php
    if ($nota >= 7) {
        echo "<p>Aluno aprovado ✅</p>";
    } else {
        echo "<p>Aluno reprovado ❌</p>";
    }
    ?>
</html>
