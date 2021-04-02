<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo 
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifo nos', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); //de menor a mayor
rsort($numeros); //de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo

$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($cliente); // ordena por valor, primero numeros y luegos los string en orden alfabetico
arsort($cliente); // ordena por valor(letras de z hacia la A, luego los numeros)
ksort($cliente); // Para ordenar por llaves, usamos
krsort($cliente); // ordena por llves (orden alfabetico, DE LA Z  a la A);


echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
