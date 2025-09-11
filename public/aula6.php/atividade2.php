<?php
// Array associativo com produtos e seus preços
$produtos = [
    "Notebook" => 3500.00,
    "Mouse" => 80.00,
    "Teclado" => 120.00,
    "Monitor" => 900.00,
    "Impressora" => 650.00
];

// Variável para armazenar o valor total
$total = 0;

// Exibe cada produto e seu preço
foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    $total += $preco;
}

// Exibe o valor total da soma
echo "<br><strong>Valor total: R$ " . number_format($total, 2, ',', '.') . "</strong>";
?>
