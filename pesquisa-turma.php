<?php
    $turmas = array(
        "3DSD" => array(
            "16117" => "Amanda de Oliveira Pinto",
            "17118" => "Bruno Penteado dos Santos",
            "18119" => "Thiago Carrara",
            "19120" => "Danilo Rafaeli",
            "20121" => "Cintia Vitória Figueiredo Cavalcanti"
        ),
        "2CTDS" => array(
            "17427" => "Denizete Teixeira Gomez",
            "17428" => "Sueli de Lurdes Lopes da Silva",
            "17429" => "Carlos Roberto Faria de Lima"
        ),
        "3DSN" => array(
            "21334" => "Ricardo Richie de Melo Peres",
            "21335" => "Luís Santos de Pádua",
            "21336" => "André Vinícius Ramos de Almeida"
        )
    );

    $turma = strtoupper($_POST["turma"]);
    echo "<h1>Alunos da turma " . $turma . "</h1>";
    echo "<table border = '1px'>";
    foreach($turmas[$turma] as $aluno){
        echo "<tr><td>" . $aluno . "</td></tr>";
    }
    echo "</table>";
?>