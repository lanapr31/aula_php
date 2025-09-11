<?php
// Inicializa a variável com o valor 1
$numero = 1;

// Início do laço while
while ($numero <= 50) {
    
    // Verifica se o número é múltiplo de 5
    if ($numero % 5 == 0) {
        // Exibe o número seguido de quebra de linha
        echo $numero . "<br>";
    }

    // Incrementa o número
    $numero++;
}
?>
