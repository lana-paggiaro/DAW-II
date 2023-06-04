<?php
    try{
        //conexao PFO  // IP, nomeBD, usuario, senha
        //$db = 'mysql:host=localhost;dbname=cl201174;charset=utf8';
        $db = 'mysql:host=143.106.241.3;dbname=cl201174;charset=utf8';
        $user = 'cl201174';
        $pass = 'essaehumasenha!';
        $pdo = new PDO($db, $user, $pass);

        //ativar o depurador de erros para gerar exceptions em caso de erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
        $output = 'Impossivel conectar BD: ' . $e . '<br>';
        echo $output;
    }
?>