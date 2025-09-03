<?php
// Array associativo (aluno => nota)
$alunos = [
    "Ana" => 8,
    "João" => 6,
    "Maria" => 9
];

$soma = 0;
$total = count($alunos);

foreach ($alunos as $nome => $nota) {
    $soma += $nota;

    if ($nota >= 7) {
        echo "Aluno $nome tirou nota $nota - Situação: <span style='color:blue;'>APROVADO</span><br>";
    } else {
        echo "Aluno $nome tirou nota $nota - Situação: <span style='color:red;'>REPROVADO</span><br>";
    }
}

$media = $soma / $total;

echo "<br><strong>Média da turma: " . number_format($media, 2) . "</strong>";
?>