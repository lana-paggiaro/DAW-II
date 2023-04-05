<?php
    $msg = "";
    $data = "";

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $data = $_POST["data"];
        $v_data = explode("/", $data);

        $dia = $v_data[0];
        $mes = $v_data[1];
        $ano = $v_data[2];

        if(checkdate($mes, $dia, $ano))
            $msg = "Data válida!<br>";
        else
            $msg = "Data inválida!<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checagem de data</title>
</head>
<body>
    <h2>Cadastro de Eventos</h2>
    <form method="post">
        data do evento:<br>
        <input type="text" name="data" value="<?php echo $data; ?>"> <!--type="date" não tá funcionando-->
        <input type="submit" value="Ok">
        <span id="msg"><?php echo $msg; ?></span>
    </form>
</body>
</html>