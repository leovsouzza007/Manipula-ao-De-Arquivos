<?php

$frase1 = $_REQUEST["frase1"];
$frase2 = $_REQUEST["frase2"];
$frase3 = $_REQUEST["frase3"];

$arquvio = "arquivo.txt";

$frases = "frase1./nfrase2.,/n frase3./n";

if (file_put_contents($arquivo, $frases) == false) {
    echo "Frases salvas com sucesso!!";
    echo'<a href="ler_frases.php">clique aqui para ver o conteudo</a>';

} else {
    echo 'erro ao criar o arquivo';
}
