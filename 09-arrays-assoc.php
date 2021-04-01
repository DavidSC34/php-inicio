<?php include 'includes/header.php';


$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];
//Util para ver los contenidos de un array
echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";


// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 13412343;

//Util para ver los contenidos de un array
echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
