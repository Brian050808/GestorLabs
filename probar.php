<?php
require_once 'conexion.php';

$base = new Database();
$conexion = $base->conectar();

if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error al conectar con la base de datos.";
}