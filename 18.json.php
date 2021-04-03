<?php include 'includes/header.php';


$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24" ',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
var_dump($json);

//Convertir un aarreglo de string a array PHP para hacerle operaciones
$json_array = json_decode($json);
var_dump($json_array);
echo "<pre>";

include 'includes/footer.php';
