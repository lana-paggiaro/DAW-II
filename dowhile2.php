<?php

    $n = 1;
    $tabuada = 7;

    do{
        if($n == 11) continue;
        echo $n . " x " . $tabuada . " = " . ($n * $tabuada) . "<br>";
        $n++;
    }while($n<=20);

?>