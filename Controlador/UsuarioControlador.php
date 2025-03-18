<?php

include '../Datos/UsuarioDao.php';
require_once '../Entidades/Usuarios.php'; // Asegúrate de incluir la clase Usuarios

class UsuarioControlador
{
    /**
     * Método para validar el inicio de sesión
     * 
     * @param string $usuario   Nombre de usuario
     * @param string $password  Contraseña
     * @return mixed            Devuelve un array con los datos del usuario si existe, false en caso contrario
     */
    public static function login($usuario, $password)
    {
        $obj_usuario = new Usuarios(); // Instancia de la clase Usuarios
        $obj_usuario->setNombre_de_usuario($usuario); // Usar el setter correcto
        $obj_usuario->setContraseña($password); // Usar el setter correcto

        return UsuarioDao::login($obj_usuario); // Retornar los datos completos del usuario
    }
}
?>
