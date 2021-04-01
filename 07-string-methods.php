<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo     ";

//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacis en blanco

$texto = trim($nombreCliente);
echo strlen($texto);

//Convertir a mayusuclas

echo strtoupper($nombreCliente);
//Cnverttir en minusculas
echo strtolower($nombreCliente);


//en los mails un correo con mayus o misnuscualas es el mismo , este nos ayudara a validar
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1)  === strtolower($mail2));

echo str_replace('Juan', 'J', $nombreCliente);

//REvisar si un string existe o no

echo strpos($nombreCliente, 'Juan');

//concatenar variables

$tipocliente = "Premium";
echo "<br>";
echo "El cliente " . $nombreCliente . " es " . $tipocliente;

echo "El cliente {$nombreCliente} es ${tipocliente}";




include 'includes/footer.php';
