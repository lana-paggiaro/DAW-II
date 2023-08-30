<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>

<body>

    <a href="index.html">Home</a> | <a href="consulta.php">Consulta</a>
    <hr>

    <h2>Edição de Alunos</h2>

</body>

</html>

<?php

include("conexaoBD.php");

$ra = $_POST['ra'];
$novoNome = $_POST['nome'];
$novoCurso = $_POST['curso'];
//upload dir
$uploaddir = 'upload/fotos/';
//foto
$foto = $_FILES["foto"];
$nomeFoto = $foto['name'];
$tipoFoto = $foto['type'];
$tamanhoFoto = $foto['size'];

//gerando novo nome para a foto
$info = new SplFileInfo($nomeFoto);
$extensaoArq = $info->getExtension();
$novoNomeFoto = $ra . "." . $extensaoArq;

//faz update da foto apenas se o arquivo foi enviado
if (($nomeFoto != "") && (move_uploaded_file($_FILES['foto']['tmp_name'], $uploaddir . $novoNomeFoto))) {
    $uploadfile = $uploaddir . $novoNomeFoto;

    //só altera a foto se for feito um novo upload
    $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso, arquivoFoto = :novaFoto WHERE ra = :ra');
    $stmt->bindParam(':novoNome', $novoNome);
    $stmt->bindParam(':novoCurso', $novoCurso);
    $stmt->bindParam(':novaFoto', $uploadfile);
    $stmt->bindParam(':ra', $ra);
} else {
    //senão mantem a foto anterior, não fazendo update do campo arquivoFoto
    $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
    $stmt->bindParam(':novoNome', $novoNome);
    $stmt->bindParam(':novoCurso', $novoCurso);
    $stmt->bindParam(':ra', $ra);
}

try {
    $stmt->execute();
    echo "Os dados do aluno de RA $ra foram alterados!";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

$pdo = null;

/*include("conexaoBD.php");

    $ra = $_POST['ra'];
    $novoNome = $_POST['nome'];
    $novoCurso = $_POST['curso'];
    //foto
    $foto = $_FILES["foto"];
    $nomeFoto = $foto['name'];
    $tipoFoto = $foto['type'];
    $tamanhoFoto = $foto['size'];

    //faz update da foto apenas se o arquivo foi enviado
    if($nomeFoto != ""){
        //lendo o conteudo do arq para uma var
        $fotoBinario = file_get_contents($foto['tmp_name']);
        $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso, foto = :foto WHERE ra = :ra');
        $stmt->bindParam(':novoNome', $novoNome);
        $stmt->bindParam(':novoCurso', $novoCurso);
        $stmt->bindParam(':foto', $fotoBinario);
        $stmt->bindParam(':ra', $ra);
    }else{
        $stmt = $pdo->prepare('UPDATE alunos SET nome = :novoNome, curso = :novoCurso WHERE ra = :ra');
        $stmt->bindParam(':novoNome', $novoNome);
        $stmt->bindParam(':novoCurso', $novoCurso);
        $stmt->bindParam(':ra', $ra);
    }

    try {
        $stmt->execute();
        echo "Os dados do aluno de RA $ra foram alterados!";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;*/
?>