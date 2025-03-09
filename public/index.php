<?php
// Incluir la clase del controlador
require_once __DIR__ . '/../app/controllers/LibreriaController.php';

// Incluir la configuración de la base de datos (suponiendo que la tienes en config/database.php)
require_once __DIR__ . '/../config/database.php';

// Obtener la ruta de la URL 
$request = $_SERVER['REQUEST_URI'];

// Definir la cantidad de libros según la URL
$cantidad = null;

if (strpos($request, '/1') !== false) {
    $cantidad = 1;
} elseif (strpos($request, '/2') !== false) {
    $cantidad = 2;
} elseif (strpos($request, '/3') !== false) {
    $cantidad = 3;
} elseif (strpos($request, '/4') !== false) {
    $cantidad = 4;
} elseif (strpos($request, '/5') !== false) {
    $cantidad = 5;
} elseif (strpos($request, '/6') !== false) {
    $cantidad = 6;
} elseif (strpos($request, '/7') !== false) {
    $cantidad = 7;
} elseif (strpos($request, '/8') !== false) {
    $cantidad = 8;
} elseif (strpos($request, '/9') !== false) {
    $cantidad = 9;
} elseif (strpos($request, '/10') !== false) {
    $cantidad = 10;
} else {
    $cantidad = 8;
} 

// Crear una instancia del controlador
$controller = new LibreriaController($pdo);

// Mostrar los libros según la cantidad determinada
$controller->mostrarLibros($cantidad);
?>
