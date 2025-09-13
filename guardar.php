<?php

$frase1 = $_REQUEST["frase1"];
$frase2 = $_REQUEST["frase2"];
$frase3 = $_REQUEST["frase3"];

$arquivo = "arquivo.txt";

$frases = $frase1 . "\n" . $frase2 . "\n" . $frase3 . "\n";

if (file_put_contents($arquivo, $frases) !== false) {
    echo "Frases salvas com sucesso!!<br>";
    echo '<a href="ler.php">Clique aqui para ver o conteúdo</a>';
} else {
    echo "Erro ao criar o arquivo";
}

?>
