<?php

/**
 * Crea un usuario
 * 
 * @param string $nombre Nombre del usuario
 * @param string $email Email del usuario
 * @return Usuario
 */
function crearUsuario(string $nombre, string $email): Usuario {
    return new Usuario($nombre, $email);
}

/**
 * Muestra los datos de un usuario
 * 
 * @param Usuario $usuario
 * @return void
 */
function mostrarUsuario(Usuario $usuario): void {
    echo "Nombre: " . $usuario->getNombre() . "<br>";
    echo "Email: " . $usuario->getEmail() . "<br>";
}
