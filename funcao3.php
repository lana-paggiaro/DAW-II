<?php

    function calcMedia($n1,$n2){
        $media = ($n1+$n2)/2;
        return $media;
    }

    $n1 = $_POST["nota1"]; //$_GET ou $_REQUEST
    $n2 = $_POST["nota2"];

    $media = calcMedia($n1,$n2);

    echo "Média = " . $media . "<br>";

    if($media >= 6.0){
        echo "<span id='aprovado'> APROVADO! </span>";
    } else{
        echo "<span id='reprovado'> REPROVADO! </span>";
    }

?>