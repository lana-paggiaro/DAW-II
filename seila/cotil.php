<?php
    $homepage = file_get_contents("https://cotil.unicamp.br");
    $filename = fopen("siteCotil.html", 'w+');
    fwrite($filename, $homepage);
    fclose($filename);
    echo "Arquivo criado com sucesso!";
?>