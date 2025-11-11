<?php 

$texto = 'Isto é uma string';

var_dump($texto);


//Funções de string
echo '<br>' . strtoupper('Isso é um testo minusculo'); // ISSO É UM TESTO MINUSCULO
echo '<br>' . strtolower('ISSO É UM TESTO MAIUSCULO'); // Isso é um testo maiusculo
echo '<br>' . ucfirst('só a primeira letra'); // Só a primeira letra
echo '<br>' . ucwords('todas as letras'); // Todas As Letras

// calcula o tamanho da string
echo '<br>' . strlen('Todas as letras'); // 15

// multibyte string length
echo '<br>' . mb_strlen('Olá'); // 3


echo '<br>' . substr('Hello Word', 6, 4); // Word


?>