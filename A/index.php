<?php

require_once __DIR__ . '/funciones.php';

/**
 * echo "Resultado de sumar(5,3): " . sumar(5, 3) . "<br>";
 * echo "Resultado de esPar(10): " . (esPar(10) ? "Sí" : "No");
 */

// 1) sumar
echo "<strong>Llamada:</strong> sumar(5, 3)<br>";
echo "<strong>Resultado:</strong> " . sumar(5, 3) . "<br><br>";

// 2) saludar
echo "<strong>Llamada:</strong> saludar('Sergio', 'Buenos dias')<br>";
echo "<strong>Resultado:</strong> " . saludar('Sergio', 'Buenos dias') . "<br><br>";

// 3) swap
$a = 10;
$b = 20;
swap($a, $b);
echo "<strong>Llamada:</strong> swap(\$a, \$b) donde \$a=10, \$b=20<br>";
echo "<strong>Resultado:</strong> a=$a, b=$b<br><br>";

// 4) sumaTotal (variadic)
echo "<strong>Llamada:</strong> sumaTotal(1, 2, 3, 4, 5)<br>";
echo "<strong>Resultado:</strong> " . sumaTotal(1, 2, 3, 4, 5) . "<br><br>";

// 5) factorial
echo "<strong>Llamada:</strong> factorial(5)<br>";
echo "<strong>Resultado:</strong> " . factorial(5) . "<br><br>";

try {
    echo "<strong>Llamada:</strong> factorial(-1) (caso borde / error controlado)<br>";
    echo "<strong>Resultado:</strong> " . factorial(-1) . "<br><br>";
} catch (Exception $e) {
    echo "<strong>Error:</strong> " . $e->getMessage() . "<br><br>";
}

// 6) crearMultiplicador
echo "<strong>Llamada:</strong> crearMultiplicador(3)<br>";
$triple = crearMultiplicador(3);
echo "<strong>Resultado:</strong> triple(5) = " . $triple(5) . "<br><br>";

// 7) stats
echo "<strong>Llamada:</strong> stats([2,4,6,8])<br>";
list($min, $max, $avg) = stats([2, 4, 6, 8]);
echo "<strong>Resultado:</strong> min=$min, max=$max, avg=$avg<br><br>";

echo "<strong>Llamada:</strong> stats([]) (array vacio)<br>";
list($min, $max, $avg) = stats([]);
echo "<strong>Resultado:</strong> min=$min, max=$max, avg=$avg<br><br>";
