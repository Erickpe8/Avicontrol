<<<<<<< HEAD
<?php

/**
 * Clase Usuarios
 * 
 * Representa la entidad de un usuario con sus atributos y métodos de acceso (getters y setters).
 */
class Usuarios
{
    /**
     * Atributos de la clase Usuarios
     */
    private $identificacion;
    private $tipo_de_documento;
    private $numero_de_documento;
    private $primer_nombre;
    private $segundo_nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $correo_electronico;
    private $numero_de_telefono;
    private $rol;
    private $nombre_de_usuario;
    private $contraseña;
    private $fecha_de_registro;
    private $estado;

    /**
     * Métodos Getters y Setters
     * Permiten obtener y asignar valores a los atributos de la clase.
     */

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
    }

    public function getTipo_de_documento() {
        return $this->tipo_de_documento;
    }

    public function setTipo_de_documento($tipo_de_documento) {
        $this->tipo_de_documento = $tipo_de_documento;
    }

    public function getNumero_de_documento() {
        return $this->numero_de_documento;
    }

    public function setNumero_de_documento($numero_de_documento) {
        $this->numero_de_documento = $numero_de_documento;
    }

    public function getPrimer_nombre() {
        return $this->primer_nombre;
    }

    public function setPrimer_nombre($primer_nombre) {
        $this->primer_nombre = $primer_nombre;
    }

    public function getSegundo_nombre() {
        return $this->segundo_nombre;
    }

    public function setSegundo_nombre($segundo_nombre) {
        $this->segundo_nombre = $segundo_nombre;
    }

    public function getPrimer_apellido() {
        return $this->primer_apellido;
    }

    public function setPrimer_apellido($primer_apellido) {
        $this->primer_apellido = $primer_apellido;
    }

    public function getSegundo_apellido() {
        return $this->segundo_apellido;
    }

    public function setSegundo_apellido($segundo_apellido) {
        $this->segundo_apellido = $segundo_apellido;
    }

    public function getCorreo_electronico() {
        return $this->correo_electronico;
    }

    public function setCorreo_electronico($correo_electronico) {
        $this->correo_electronico = $correo_electronico;
    }

    public function getNumero_de_telefono() {
        return $this->numero_de_telefono;
    }

    public function setNumero_de_telefono($numero_de_telefono) {
        $this->numero_de_telefono = $numero_de_telefono;
    }

    public function getRol() {
        return $this->rol;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function getNombre_de_usuario() {
        return $this->nombre_de_usuario;
    }

    public function setNombre_de_usuario($nombre_de_usuario) {
        $this->nombre_de_usuario = $nombre_de_usuario;
    }

    public function getContraseña() {
        return $this->contraseña;
    }

    public function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    public function getFecha_de_registro() {
        return $this->fecha_de_registro;
    }

    public function setFecha_de_registro($fecha_de_registro) {
        $this->fecha_de_registro = $fecha_de_registro;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }
}
