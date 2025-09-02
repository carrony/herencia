<?php
    require_once("Persona.php");

    class Empleado extends Persona {
        private $cargo;
        private $salario;

        public function __construct($dni, $nombre, $apellidos, $edad, 
                    $telefono="", $email="", $cargo="",$salario=1200)
        {
            parent::__construct($dni,$nombre,$apellidos,$edad,$telefono,$email);
            $this->cargo=$cargo;
            $this->salario=$salario;
        }

        public function __toString()
        {
            return parent::__toString(). <<<END
                    <td> {$this->cargo} </td>
                    <td> {$this->salario} </td>
            END;
        }

        /**
         * Get the value of cargo
         */
        public function getCargo()
        {
                return $this->cargo;
        }

        /**
         * Set the value of cargo
         */
        public function setCargo($cargo): self
        {
                $this->cargo = $cargo;

                return $this;
        }

        /**
         * Get the value of salario
         */
        public function getSalario()
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         */
        public function setSalario($salario): self
        {
                $this->salario = $salario;

                return $this;
        }
    }
?>