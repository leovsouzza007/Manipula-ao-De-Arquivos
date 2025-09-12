<?php

$frase1 = $_REQUEST["frase1"];
$frase2 = $_REQUEST["frase2"];
$frase3 = $_REQUEST["frase3"];

$caminho = "arquivo/arquivo.txt";

$conteudo = $frase1 . "\n" . $frase2 . "\n" . $frase3 . "\n";

file_put_contents($caminho, $conteudo);

echo "<h2>Frases salvas com sucesso!</h2>";
echo '<a href="script.php">Clique aqui para ver o conteúdo</a>';
    
?>

