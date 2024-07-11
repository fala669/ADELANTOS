<?php




echo"ingrese Nombre\n";
$nombre = readline();
echo "Ingrese contraseña\n";
$contraseña = readline();

if ($nombre == "alejandro" && $contraseña = 1234) {
    echo "Ingrese cantidad de empleados \n";
    $cantidadempleados = intval(readline());
    $empleados = []; 
    
    
    for ($i = 1; $i <= $cantidadempleados; $i++) {
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
    $nombrebuscar = readline();
    echo "IDENTIDAD DEL EMPLEADO \n";
    $dnibuscar = intval(readline());
    

    
    foreach ($empleados as $empleado) {
        if ($empleado['nombre'] === $nombrebuscar && $empleado['dni'] === $dnibuscar) {
            echo "EMPLEADO:\n";
            echo $empleado;
            
            break; 
        }else {
            echo"EMPLEADO NO ENCONTRADO\n";
        }
    }
    
 
    
    }else {
        echo "Nombre o Contraseña Incorrectos\n";
    }

   
   


