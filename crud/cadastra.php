<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        #sucess {
            color: green;
            font-weight: bold;
        }
        #error {
            color: red;
            font-weight: bold;
        }
        #warning {
            color: orange;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <a href="index.php">Home</a>
    <hr>
    <h2>Cadastro de Alunos</h2>
    <div>
        <form method="post">
            RA:<br>
            <input type="text" size="6" name="ra"><br><br>
            Nome:<br>
            <input type="text" size="50" name="nome"><br><br>
            Curso:<br>
            <select name="curso">
                <option></option>
                <option value="Desenvolvimento de sistemas">Desenvolvimento de Sistemas</option>
                <option value="Edificações">Edificações</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="Geodésia e Cartografia">Geodésia e Cartografia</option>
                <option value="Mecânica">Mecânica</option>
                <option value="Qualidade">Qualidade</option>
            </select>
            <br><br><input type="submit">
            <button href="cadastra.php">Refresh</button>
        </form>
    </div>
    <br><hr>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        try{
            $ra = $_POST["ra"];
            $nome = $_POST["nome"];
            $curso = $_POST["curso"];

            if((trim($ra) && trim($nome) && trim($curso)) == ""){
                echo "<span id='warning'>Preencha todos os campos!</span>";
            } else{
                include("conexaoBD.php");
                
                //cerificando se o RA informado já existe no banco de dados para não dar exception
                $stmt = $pdo->prepare("select * from alunos where ra = :ra");
                $stmt->bindParam(':ra', $ra);
                $stmt->execute();

                $rows = $stmt->rowCount();

                if($rows <= 0){
                    $stmt = $pdo->prepare("insert into alunos(ra, nome, curso) values(:ra, :nome, :curso)");
                    $stmt->bindParam(':ra', $ra);
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':curso', $curso);
                    $stmt->execute();

                    echo "<span id='sucess'>Aluno cadastrado com sucesso!</span>";
                } else{
                    echo "<span id='error'>RA já cadastrado!</span>";
                }
            }
        } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    }
?>