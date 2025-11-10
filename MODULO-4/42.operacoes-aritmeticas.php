<?php 

//Operações aritiméticas no PHP

echo 2 + 2, '<br>'; // 4
echo 2 - 2, '<br>'; // 0
echo 2 * 2, '<br>'; // 4
echo 2 / 2, '<br>'; // 1

//Resultado de divisão de número quebrado é um float
echo 7 / 4; // 1.75

//Força resultado inteiro
echo intdiv(7,4), '<br>';  // 1

//Arredondar
echo round(7/4), '<br>'; // 2

echo 2 + 5 * 3 + (12/6) / (-8 +2 ** 3); // Fatal erro divisão por zero

?>