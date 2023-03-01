<?php

    $n = 1;
    $tabuada = 7;

    do{
        echo $n . " x " . $tabuada . " = " . ($n * $tabuada) . "<br>";
        if($n == 20) break;
        $n++;
    }while($n<=20);

?>