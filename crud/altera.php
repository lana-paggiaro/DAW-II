<?php
    try{
        include("conexaoBD.php");
        $STMT = $PDO->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
        $stmt->bindParam(':novoNome', $novoNome);
        $stmt->bindParam(':novoCurso', $novoCurso);
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();

        echo "Os dados do aluno de RA $ra foram alterados!";
    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
    
    $pdo = null;
?>