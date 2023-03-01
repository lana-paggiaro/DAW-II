<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes</title>
</head>
<body>
<?php
        $media = calcMedia(9.0,10.0);
        echo $media;

        echo"<br><br>";
        soma(1,2,3);
    ?>
</body>


<?php

    function calcMedia($n1, $n2){
        $media = ($n1 + $n2) / 2;
        return $media;
    }

    function soma($v1, $v2, $v3){
        $soma = $v1 + $v2 + $v3;
        echo "Soma = " . $soma;
    }

?>
</html>