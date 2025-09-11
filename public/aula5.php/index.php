<?php

include 'cabecalho.php';

$filme = "";
$genero = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $filme = $_POST['filme'] ?? '';
    $genero = $_POST['genero'] ?? '';


    $cor = "black"; 
    if (strtolower($genero) == "terror") {
        $cor = "red";
    } elseif (strtolower($genero) == "comédia" || strtolower($genero) == "comedia") {
        $cor = "green";
    }


    $mensagem = "<p style='color: $cor;'>Filme: <strong>$filme</strong> | Gênero: <strong>$genero</strong></p>";
}
?>


<form method="post" action="index.php">
    <label for="filme">Nome do filme:</label><br>
    <input type="text" name="filme" id="filme" required><br><br>

    <label for="genero">Gênero:</label><br>
    <input type="text" name="genero" id="genero" required><br><br>

    <input type="submit" value="Enviar">
</form>

<?php
    echo $mensagem;
?>

<?php
include 'rodape.php';
?>
