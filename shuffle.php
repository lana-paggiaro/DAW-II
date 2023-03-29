<?php
    $arrayExemplo = array("Linguagem1" => "PHP", "Linguagem2" => "SQL", "Linguagem3" => 100, "Linguagem4" => "Assembly");

    print_r($arrayExemplo);
    shuffle($arrayExemplo);
    echo "<hr>Após 'embaralhar' com shuffle(array)<br>";
    print_r($arrayExemplo);
    echo"<hr><h2>Pressione F5 para atualizar a página e observe o resultado!</h2>";
    echo "<hr>";
    $arrayExemplo2 = array("Linguagem1" => "PHP", "Linguagem2" => "Javascript", "Linguagem3" => 100, "Linguagem4" => "Assembler");

    print_r($arrayExemplo2);
    sort($arrayExemplo2); //rsort (reverse sort)
    echo "<hr>Após 'embaralhar' com shuffle(array)<br>";
    print_r($arrayExemplo2);
    echo"<hr><h2>Sort</h2>";
?>