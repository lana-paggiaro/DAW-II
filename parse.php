<?php
    $str = "curso1=Informática&curso2=Edificações&curso3=Enfermagem";
    parse_str($str,$cursos);
    print_r($cursos);

    echo "<br>";

    $str2 = "29/03/2023";
    $cursos = explode("/",$str2);
    print_r($cursos);
    
    echo "<br>";

    $str3 = array("29","03","2023");
    $cursos = implode("/",$str3);
    print_r($cursos);
?>