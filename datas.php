<?php
    $atual = new DateTime();
    echo "<br>" . $atual -> format('d-m-Y H:i:s');

    $especifica = new DateTime('1990-01-22'); //ano mes dia
    echo "<br>" . $especifica -> format('d-m-Y H:i:s');

    $texto = new DateTime('+1 month');
    echo "<br>" . $texto -> format('d-m-Y H:i:s');

    echo "<br>";
    echo "-----------------------------------";
    /*Timestamp é uma forma numérica de representar uma forma de tempo. Indica o tempo transcorrido, em segundos, desde a data de 01/01/1970
     */
    echo "<br>";
    $agora = time();
    echo  $agora;
    echo "<br>";

    //date_default_timezone_set("America/Sao_Paulo");
    echo "<br>";
    echo "-----------------------------------";
    echo "<br>";

    echo date_default_timezone_set("America/Sao_Paulo");
    echo "<br>";
    
    echo date("Y-m-d H:i:s", time());
    echo "<br>";
    echo date("Y-m-d", time());
    echo "<br>";
    echo date("D");
    echo "<br>";
    echo date("l");
    echo "<br>";
    echo date("F");
    echo "<br>";

    echo "<br>";
    echo "-----------------------------------";
    echo "<br>";
    if(checkdate(02, 20, 2022))
        echo "Data válida!<br>";
    else
        echo "Data inválida!<br>";

    if(checkdate(02,30,2022))
        echo "Data válida!<br>";
    else
        echo "Data inválida!<br>";
?>