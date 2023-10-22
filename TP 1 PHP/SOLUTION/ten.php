<?php

$int i =0;
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$result = $num1 + $num2;

if ($result > 200)
{
    echo ("La somme est plus de 200");
} else 
{
    echo ("La somme est : $result");
}

for (; $i <100 ; $i++) { 
    echo("<br>Je suis stagiaire a ITIAM");
}

?>