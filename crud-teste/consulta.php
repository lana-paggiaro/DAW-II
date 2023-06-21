<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de Aliens</title>
</head>

<body>

<a href="index.html">Home</a>
<hr>

<h2>Consulta de Alunos</h2>
<div>
    <form method="post">

        Código:<br>
        <input type="text" size="10" name="code">
        <input type="submit" value="Consultar">
        <hr>
    </form>
</div>

</body>
</html>

<?php

    include("conexaoBD.php");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST["code"]) && ($_POST["code"] != "")){
            $code = $_POST["code"];
            $stmt = $pdo->prepare("SELECT * FROM xalien WHERE code = :code order by description, price, type");
            $stmt-> bindParam(':code', $code);
        } else{
            $stmt = $pdo->prepare("SELECT * FROM xalien ORDER BY description, price, type");
        }

        try{
            $stmt->execute();
            
            echo "<form method='post'><table border='1px'>";
            echo "<tr><th></th><th>CODE</th><th>DESCRIPTION</th><th>PRICE</th><th>TYPE</th></tr>";
            
            while($row = $stmt->fetch()){
                echo "<tr>";
                echo "<td><input type='radio' name='code' value='" . $row['code'] . "'>";
                echo "<td>" . $row['code'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }

            echo "</table></form>";

        }catch(PDOException $e){
            echo 'Error: ' .$e->getMessage();
        }
        $pdo = null;
    }

?>