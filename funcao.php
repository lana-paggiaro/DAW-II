<?php

    function calcMedia($n1, $n2){
        $media = ($n1 + $n2) / 2;

        //echo "media = " . $media;
        return $media;

        /*if $media < 6{
            echo "reprovado";
        } else {
            echo "aprovado";
        }*/
    }

    $media = calcMedia(7.0,9.0);

    echo "Média = " . $media . "<br>";

    if($media >= 6.0){
        echo "<span id='aprovado'> APROVADO! </span>";
    } else{
        echo "<span id='reprovado'> REPROVADO! </span>";
    }

?>