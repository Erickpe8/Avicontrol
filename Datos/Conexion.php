<<<<<<< HEAD
<?php

/**
 * Clase Conexion
 * 
 * Permite establecer la conexión con la base de datos 'avicontrol'.
 */
class Conexion
{
    /**
     * Establece la conexión con la base de datos utilizando PDO.
     *
     * @return PDO Objeto de conexión a la base de datos.
     */
    public static function conectar()
    {
        try {
            // Se crea un objeto PDO para la conexión con la base de datos 'avicontrol'
            $cn = new PDO("mysql:host=localhost;dbname=avicontrol", "root", "");

            // Retorna la conexión establecida
            return $cn;

        } catch (PDOException $e) {
            // Se captura y muestra el mensaje de error en caso de falla en la conexión
            die($e->getMessage());
        }
    }
}

// Se invoca el método conectar para probar la conexión
