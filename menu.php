<?php
    $op = 3;

    switch($op){
        case 1:
            cadastrar();
            echo "Cadastro";
            break;
        case 2:
            echo "Relatórios";
            break;
        case 3:
            echo "Opção inválida!";
            break;
    }

    echo "<br><br> oi";

    //($op == 1) == cadastrar() : consultar();
?>