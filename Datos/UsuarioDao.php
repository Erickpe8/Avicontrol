
<?php 

// Incluir archivos necesarios
include 'Conexion.php';
require_once '../Entidades/Usuarios.php';

class UsuarioDao extends Conexion
{
    protected static $cnx;

    /**
     * Establece la conexión con la base de datos.
     */
    public static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    /**
     * Desconecta la conexión con la base de datos.
     */
    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Método para validar el login de un usuario.
     * 
     * @param Usuarios $usuario Objeto de la clase Usuarios.
     * @return mixed Retorna un array con los datos del usuario si existe, false en caso contrario.
     */
    public static function login($usuario)
{
    $query = "SELECT * FROM usuarios WHERE nombre_de_usuario = :usuario AND contraseña = :password";

    self::getConexion();
                                             
    $resultado = self::$cnx->prepare($query);
    
    $nombreUsuario = $usuario->getNombre_de_usuario();
    $claveUsuario = $usuario->getContraseña();

    $resultado->bindParam(":usuario", $nombreUsuario);
    $resultado->bindParam(":password", $claveUsuario);
    
    $resultado->execute();
    
    echo "<pre>SQL ejecutado: " . $query . "</pre>"; // Ver la consulta ejecutada
    echo "<pre>Usuario: " . $nombreUsuario . "</pre>";
    echo "<pre>Contraseña: " . $claveUsuario . "</pre>";
    
    if ($resultado->rowCount() > 0) {
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    return false;
}
} 