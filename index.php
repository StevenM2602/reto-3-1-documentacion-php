<?php

require_once 'Usuario.php';
require_once 'funciones.php';

/**
 * Archivo principal del proyecto
 */

$usuario1 = crearUsuario("Juan", "juan@email.com");
$usuario2 = crearUsuario("Ana", "ana@email.com");

mostrarUsuario($usuario1);
echo "<br>";
mostrarUsuario($usuario2);
