<?php
    echo "Hello World! <br><br>";
    echo "<b>Olá mundo</b>";
    echo "<br><br>";

    //------------------------------Variáveis----------------------------

    $nome = "COTIL";
    echo $nome;
    echo "<br><br>";

    var_dump($nome); //exibe o tipo de dado, tamanho usado e valor
    echo "<br><br>";

    $outroNome = "UNICAMP";

    echo $nome . " " . $outroNome;
    echo "<br><br>";

    unset($nome); //Remove variável. Se quiser limpar várias, basta separar por ","

                 //isset é um função que verifica se a variável existe
    if(isset($nome)){
        echo $nome;
        echo "<br><br>";
    }else{
        echo "a variável está vazia <br><br>";
    }

    $valor = 50.15;
    echo $valor;
    echo "<br><br>";

    $aprovado = true;
    echo $aprovado;
    echo "<br><br>";

    $disciplinas = array("BD", "LP", "DAW");
    echo $disciplinas[2];
    echo "<br><br>";

    $nulo = null;
    $vazio = "";

    //----------------------------------Constantes--------------------------------------

    define("PI", 3.14);
    define("NOME_ALUNO", "Maria");

    //https://secure.php.net/manual/pt_BR/reserved.constants.php - constantes pré-definidas do PHP

    $resultado = 3 * PI;
    echo $resultado . "<BR><BR>";
    echo "Nome do Aluno: " . NOME_ALUNO . "<BR><BR>";

    //---------------------------------Super Variáveis----------------------------------

    echo "<br><br>";
    echo $_SERVER["SERVER_ADDR"] . "<BR>";
    echo $_SERVER["SERVER_NAME"] . "<BR>";
    echo $_SERVER["HTTP_USER_AGENT"] . "<BR>";
    echo $_SERVER["REMOTE_ADDR"] . "<BR>";
    echo $_SERVER["SCRIPT_NAME"] . "<BR>";

    //-----------------------------operadores-------------------------------------------
    
    echo "<br><br>";
    
    if(1 == "1"){
        echo "é igual";
    } else{
        echo "é diferente";
    }

    echo "<br><br>";

    if(1 === "1"){
        echo "é igual";
    } else{
        echo "diferente pô";
    }

    echo "<br><br>";
    
    if(1 != "1"){
        echo "é diferente";
    } else{
        echo "é igual";
    }

    echo "<br><br>";
    
    if(1 !== "1"){
        echo "é diferente";
    } else{
        echo "é igual";
    }
?>