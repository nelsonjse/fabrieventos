<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'blog';

// Crear conexión
$db = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($db->connect_error) {
    die("Error de conexión: " . $db->connect_error);
}
?>
