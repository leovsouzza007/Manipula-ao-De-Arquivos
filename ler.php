<?php

$arquvio = "arquivo.txt";

if (file_exists($arquvio)) {
    $conteudo = file_get_contents($arquvio);
    echo $conteudo;
} else {
    echo "<h2>O arquivo não existe. Grave as frases primeiro.</h2>";
    echo '<a href="gravar.php">Clique aqui para gravar</a>';
}