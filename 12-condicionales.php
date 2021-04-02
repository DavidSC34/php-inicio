<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if ($autenticado && $admin) {
    echo "usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesion";
}

//If anidados

$cliente = [
    'nombre' => 'David',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<br>";
if (!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";

    if ($cliente['saldo'] > 0) {
        echo "El saldo del cliente esta disponible";
    } else {
        echo "El cliente no tien saldo disponible";
    }
}


echo "<br>";
// else if

if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

//Switch
echo "<br>";
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'Javascript':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'HTML':
        echo "Emmm...";
        break;

    default:
        echo "Algun lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';
