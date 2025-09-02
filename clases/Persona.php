<?php
    class Persona {
        // estado
        public $dni;
        protected $nombre;
        protected $apellidos;
        protected $telefono;
        protected $edad;
        private $email;

        // comportamiento
        public function __construct($dni, $nombre, $apellidos, $edad, 
                    $telefono="", $email="")
        {
            $this->dni=$dni;
            $this->nombre=$nombre;
            $this->apellidos=$apellidos;
            $this->edad=$edad;
            $this->telefono=$telefono;
            $this->email=$email;
        }

    /*    public function esMayorDeEdad() {
            if ($this->edad>=18) {
                return true;
            } else {
                return false;
            }
        }*/

        // equivalente al anterior
        public function esMayorDeEdad() {
            return $this->edad>=18;
        }

        public function __toString()
        {
            return <<<END
                <tr>
                    <td> {$this->dni} </td>
                    <td> {$this->nombre} </td>
                    <td> {$this->apellidos} </td>
                    <td> {$this->telefono} </td>
                    <td> {$this->edad} </td>
                    <td> {$this->email} </td>
                </tr>
            END;
        }

        // getters y setters

        /**
         * Get the value of dni
         */
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         */
        public function setDni($dni): self
        {
                $this->dni = $dni;

                return $this;
        }

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         */
        public function setNombre($nombre): self
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellidos
         */
        public function getApellidos()
        {
                return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         */
        public function setApellidos($apellidos): self
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        /**
         * Get the value of telefono
         */
        public function getTelefono()
        {
                return $this->telefono;
        }

        /**
         * Set the value of telefono
         */
        public function setTelefono($telefono): self
        {
                $this->telefono = $telefono;

                return $this;
        }

        /**
         * Get the value of edad
         */
        public function getEdad()
        {
                return $this->edad;
        }

        /**
         * Set the value of edad
         */
        public function setEdad($edad): self
        {
                $this->edad = $edad;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }
    }
?>