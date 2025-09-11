<?php
function calcularMedia($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}

echo "Média: " . calcularMedia(7.5, 8.0, 6.0); 
?>
