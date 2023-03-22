<?php

$texto = " cotil - unicamp ";

//trim - Retira espaço no inicio e final de uma string
echo "-" . trim($texto) . "-" . "<br>";

//ltrim - Retira espaço em branco de (ou outros caracteres) do final de uma string
echo "-" . ltrim($texto) . "-" . "<br>";

//rtrim - Retira espaços em ranco (ou otros caracteres) do inicio da string
echo "-" . rtrim($texto) . "-" . "<br>";

//tudo maiusculo
echo strtoupper($texto) . "<br>";

//tudo minusculo
echo strtolower($texto) . "<br>";

//primeira letra maiuscula
echo "uc: " . ucfirst($texto) . "<br>";

//primeiras letras maiusculas
echo ucwords($texto) . "<br>";

//retorna o tamanho da string
echo strlen($texto) . "<br>";

//reversão da string
echo strrev($texto) . "<br>";

//quebra a string a cada 3 caracteres
$str = str_split($texto, 3);
print_r($str);

echo "<br>";

//Encontra a posição da primeira ocorrencia de uma string
echo strpos($texto, "unicamp") . "<br>";

$email = "simone@cotil.unicamp.br";

//retorna a String a partir o caracter informado "@"
echo strchr($email, "@") . "<br>";

//retorna a string antes do caracter informado "@"
echo strchr($email, "@", true) . "<br>"; //true faz a função fazer o contrario (!)

//Retorna uma parte de uma string
echo substr('abcdef', 1) . "<br>";
echo substr('abcdef', 1, 3) .  "<br>";

echo str_replace("i", "X", $texto) . "<br>";

//casting
$foo = "0" ; //$foo é string (ASCII 48)
$foo += 2; //$foo é agora um inteiro (2)
$foo = $foo + 1.3; //$foo é agora um float (3.3)
echo $foo . "<br>";
?>