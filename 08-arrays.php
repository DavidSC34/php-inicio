<?php include 'includes/header.php';

//Arreglos indexados

$carrito = ['Tablet', 'Television', 'Computadora'];
//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


//acceder a un elemento del array
echo $carrito[1];

//Añade un elemento en el indece 3 del arreglo
$carrito[3] = "nuevo producto";

//Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

//Añadir al inicio 
array_unshift($carrito, 'Smartwatch');

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo  $clientes[1];

include 'includes/footer.php';
