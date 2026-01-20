<?php

/**
 * Clase Usuario
 * 
 * Representa a un usuario del sistema.
 */
class Usuario {

    /**
     * Nombre del usuario
     * @var string
     */
    private string $nombre;

    /**
     * Email del usuario
     * @var string
     */
    private string $email;

    /**
     * Constructor de Usuario
     * 
     * @param string $nombre Nombre del usuario
     * @param string $email Email del usuario
     */
    public function __construct(string $nombre, string $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    /**
     * Obtiene el nombre del usuario
     * 
     * @return string
     */
    public function getNombre(): string {
        return $this->nombre;
    }

    /**
     * Obtiene el email del usuario
     * 
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }
}
