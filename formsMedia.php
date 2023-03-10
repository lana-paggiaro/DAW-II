<!--<?php
    if($_SERVER["REQUEST_METHOD"] === 'GET'){
        $msgN1 = "";
        $msgN2 = "";   
    } 
?>-->

<?php

    if($_SERVER["REQUEST_METHOD"] === 'POST'){

        $msgMedia = "";
        $msgMedia = "";

        function calcMedia($n1, $n2){
            $media = ($n1 + $n2)/2;
            return $media;

        $n1 = $_POST["nota1"]; 
        $n2 = $_POST["nota2"];

        if(trim($n1) == ""){
            $msgN1 = "A nota 1 é obrigatória";
            $msgN2 = "";
        } 
            else if (trim($n2) == "") {
            $msgN2 = "A nota 2 é obrigatória";
            $msgN1 = "";
        } else{
            $msgN1 = "";
            $msgN2 = "";

            $media = calcMedia($n1, $n2);
        
            $msgMedia = "Média = " . $media . "<br>";
        
            if($media >= 6.0){
                echo "<span id = 'aprovado'>APROVADO</span>";
            } else{
                echo "<span id = 'reprovado'>REPROVADO</span>";
            }
        }
    }
}
    /*} else {
        $msgMedia = "";
        $msgResultado = "";
        $msgN1 = "";
        $msgN2 = "";
    }*/
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form de Media</title>
    <style>
        #reprovado {
            color: red;
        }

        #aprovado {
            color: green;
        }

        #warning {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Calculo de Media</h1>

    <form  method="post"> <!-- tiramos o action para não precisarmos utilizar mais de uma pagina -->
        Nota1: <br>
        <input type="text" name="nota1" min="6"><br>
        <span id="warning"><small><?= $msgN1;?></small></span> 
        <br><br>

        Nota2: <br>
        <input type="text" name="nota2" min="6" ><br>
        <span id="warning"><small><?= $msgN2;?></small></span> 

        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr>
    <?= $msgMedia; ?>
    <br>
    <?= $msgResultado; ?>
    
</body>
</html>