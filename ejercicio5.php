<?php

echo "Ingrese cantidad de empleados \n";
$cantidad_empleados = intval(readline());
$empleados = []; 


for ($i = 1; $i <= $cantidad_empleados; $i++) {
    echo "Empleado $i\n";
    echo "Ingrese su nombre\n";
    $nombre = readline();

    echo "Ingrese su Identidad \n ";
    $dni = intval(readline());
    echo "Ingrese su género \n";
    $genero = readline();
    echo "Ingrese su edad \n";
    $edad = intval(readline());
    echo "Ingrese su estatura \n";
    $estatura = floatval(readline());
    echo "Ingrese su peso \n";
    $peso = floatval(readline());

    $empleados[] = [
        'nombre' => $nombre,
        'dni' => $dni,
        'genero' => $genero,
        'edad' => $edad,
        'estatura' => $estatura,
        'peso' => $peso,
    ];

    echo "\n";
}

echo "NOMBRE DEL EMPLEADO \n";
$nombre_buscar = readline();
echo "IDENTIDAD DEL EMPLEADO \n";
$dni_buscar = intval(readline());

$encontrado = false;

foreach ($empleados as $empleado) {
    if ($empleado['nombre'] === $nombre_buscar && $empleado['dni'] === $dni_buscar) {
        echo "EMPLEADO:\n";
        echo $empleado;
        $encontrado = true;
        break; 
    }
}

if (!$encontrado) {
    echo "EMPLEADO NO REGISTRADO\n";

}













































?>