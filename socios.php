<?php
    class Socio {
        public $nombre;
        public $dni;
        public $apellidos;
        public $telefono;
        public $direccion;

        function __construct($nombre, $dni, $apellidos, $telefono, $direccion) {
            $this->nombre = $nombre;
            $this->dni = $dni;
            $this->apellidos = $apellidos;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
        }

        function get_nombre() {
            return $this->nombre;
        }

        function set_nombre($nombre) {
            $this->nombre = $nombre;
        }

        function get_dni() {
            return $this->dni;
        }

        function set_dni($dni) {
            $this->dni = $dni;
        }

        function get_apellidos() {
            return $this->apellidos;
        }

        function set_apellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        function get_telefono() {
            return $this->telefono;
        }

        function set_telefono($telefono) {
            $this->telefono = $telefono;
        }


        function get_direccion() {
            return $this->direccion;
        }

        function set_direccion($direccion) {
            $this->direccion = $direccion;
        }
    }
?>
