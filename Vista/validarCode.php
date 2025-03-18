<<<<<<< HEAD
<?php
require_once '../Entidades/Usuarios.php';
require_once '../Controlador/UsuarioControlador.php';

session_start(); // Iniciar sesión

if (isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"]) && isset($_POST["txtRol"])) {
    $txtUsuario = $_POST["txtUsuario"];
    $txtPassword = $_POST["txtPassword"];
    $txtRol = $_POST["txtRol"];

    $usuario = UsuarioControlador::login($txtUsuario, $txtPassword);

    if ($usuario) {
        // Verificar que el rol ingresado coincida con el rol en la base de datos
        if ($usuario["rol"] === $txtRol) {
            // Guardar información del usuario en la sesión
            $_SESSION["usuario"] = $txtUsuario;
            $_SESSION["usuario_nombre"] = $usuario["primer_nombre"] . " " . $usuario["primer_apellido"];
            $_SESSION["rol"] = $txtRol;

            // Redirigir según el rol
            switch ($txtRol) {
                case "Administrador":
                    header("Location: ../rol/Administrador/Administrador.php");
                    break;
                case "Auxiliar de granja":
                    header("Location: ../rol/auxiliar_granja.php");
                    break;
                case "Contador":
                    header("Location: ../rol/contador.php");
                    break;
                default:
                    header("Location: ../Vista/");
                    break;
            }
            exit();
        }
    }
}

// Si no se encuentra el usuario o el rol no coincide
header("Location: ../Vista/?error=invalid_credentials");
exit();
?>
