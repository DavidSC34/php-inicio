<?php

declare(strict_types=1); //asegura un tipado estricto mayor calidad al escribir codigo
include 'includes/header.php';


function sumar(int $numero1 = 0, int  $numero2 = 0)
{
    echo $numero1 + $numero2;
}

sumar(10, 20);
echo "<br>";

sumar(1, 20);
echo "<br>";

sumar(100, 30);
echo "<br>";


include 'includes/footer.php';
