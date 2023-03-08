<?php

    function calcMedia($n1,$n2){
        $media = ($n1+$n2)/2;
        return $media;
    }

    $n1 = $_POST["nota1"]; //$_GET (da pra mudar na url) ou $_REQUEST
    $n2 = $_POST["nota2"];

    if((trim($n1) == "") || (trim($n2) == "")){ //($n1 == "") quando o campo eh text; (!$isset($n1))
        echo "Informe as duas notas!";
    } else {
        $media = calcMedia($n1,$n2);

        echo "Média = " . $media . "<br>";

        if($media >= 6.0){
            echo "<span id='aprovado'> APROVADO! </span>";
        } else{
            echo "<span id='reprovado'> REPROVADO! </span>";
        }
    }

?>

<html lang="en">
<head>
    <title>Oooooh oHo sometimes, i get a feeling yeaah</title>
</head>
    <!--????????-->
<body>
    
</body>
</html>