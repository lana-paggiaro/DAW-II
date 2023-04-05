<?php
    $data1 = mktime(0,0,0,10,10,2005);
    $data2 = mktime(0,0,0,10,10,2022);
    $difSeconds = ($data2 - $data1);
    echo "Difereça em segundos: " . $difSeconds, "<br>";
    $difMinutes = ($data2 - $data1) / 60;
    echo "Diferença em minutos: " . $difMinutes, "<br>";
?>