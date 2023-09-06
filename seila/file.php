<?php
    $arquivo = file("listaPets.txt");
    for($i = 0; $i<count($arquivo); $i++){
        echo "<b>Linha " . $i . " - </b> " . $arquivo[$i] . "<br>";
    }
?>