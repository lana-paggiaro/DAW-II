<?php
    //date_default_timezone_set|("America/Sao_Paulo");

    echo strtotime("+ 1 day", time()), "<br>";
    echo strtotime("+ 1 day"), "<br>";

    echo date("d-m-Y H:i:s", strtotime("+ 1 day, + 2 hour")), "<br>";
    echo date("d/m/Y", strtotime("+ 7 day")), "<br>";
    echo date("d/m/Y", strtotime("next monday")), "<br>";
    echo date("d/m/Y", strtotime("last friday")), "<br>";
    echo date("d/m/Y", strtotime("+ 1 month")), "<br>";
    echo date("d/m/Y", strtotime("+ 1 week")), "<br>";
    echo date("d/m/Y", strtotime("+ 48 hour")), "<br>";
    echo date("d/m/Y", strtotime("+ 1 year")), "<br>";

    echo "<br>";
    echo "--------------------------------------";
    echo "<br>";

    echo mktime(12, 00, 00, 02, 20, 2022), "<br>";
    //Resultado: 1645354800

    echo date("d-m-Y H:i:s", mktime(12, 00, 00, 02, 20, 2022));
    //Resultado: 20-02-2022 12:00:00
    
    echo "<br><br>";

    $dt = mktime("12", "00", "00", "02", "20", "2022");
    echo date("d-m-Y H:i:s", strtotime("+ 7 day", $dt)), "<br>";
?>