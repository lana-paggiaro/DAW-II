<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>

<body>

<a href="index.html">Home</a>
<hr>

<h2>Consulta de Alunos</h2>
<div>
    <form method="post" enctype="multipart/form-data">

        RA:<br>
        <input type="text" size="10" name="ra">
        <input type="submit" value="Consultar">
        <hr>
    </form>
</div>

</body>
</html>

<?php
    include("conexaoBD.php");

     if ($_SERVER["REQUEST_METHOD"] === 'POST') {

         if (isset($_POST["ra"]) && ($_POST["ra"] != "")) {
             $ra = $_POST["ra"];
             $stmt = $pdo->prepare("select * from alunos where ra= :ra order by ra, curso, nome");
             $stmt->bindParam(':ra', $ra);
         } else {
             $stmt = $pdo->prepare("select * from alunos order by ra, curso, nome");
         }

         try {
             //buscando dados
             $stmt->execute();

             echo "<form method='post'><table border='1px'>";
             echo "<tr><th></th><th>RA</th><th>Nome</th><th>Curso</th><th>Foto</th></tr>";

             while ($row = $stmt->fetch()) {
                 echo "<tr>";
                 echo "<td><input type='radio' name='raAluno' 
                      value='" . $row['ra'] . "'>";
                 echo "<td>" . $row['ra'] . "</td>";
                 echo "<td>" . $row['nome'] . "</td>";
                 echo "<td>" . $row['curso'] . "</td>";
                 if($row["arquivoFoto"] == null){
                    echo "<td align='center'>--</td>";
                 }else{
                    //echo "<td align='center'><img src='data:image;base64," . base64_encode($row['foto']) . "' width='150px'></td>";
                    echo '<td align="center"><img src="' . $row['arquivoFoto'] . '" width="150px"></td>';
                 }
                 echo "</tr>";

                 //base64 - maneira de codificar dados binários em texto ASCII, informando ao navegador que os dados estão embutidos
                 //em uma imagem
             }

             echo "</table><br>
             
             <button type='submit' formaction='remove.php'>Excluir Aluno</button>
             <button type='submit' formaction='edicao.php'>Editar Aluno</button>
             
             </form>";


         } catch (PDOException $e) {
             echo 'Error: ' . $e->getMessage();
         }

         $pdo = null;
     }
?>