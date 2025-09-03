<?php
require_once('Persona.php');
define('BANCO', 'ES220182');
define('OFICINA', '2305');

class Cuenta {
    private $iban;
    private $saldo;
    private static $interes;
    private $titulares;
    private $autorizado;
    private static $cuenta=1;

    private static function calculaIBAN() {
        return "".BANCO.OFICINA. sprintf("%000000d", self::$cuenta++);
    }
    
    public function __construct($titular, $interes, $saldo=0)
    {
        $this->iban=self::calculaIBAN();
        $this->titulares[]=$titular;
    }

    public function getTitulares(){
        return $this->titulares;
    }

    public function getTitularPpal(){
        return $this->titulares[0];
    }

    public function __toString() {
        $res= <<<END
            <li> IBAN: {$this->iban} </li>
            <li> Saldo_ {$this->saldo} </li>
            <li> Titular principal: {$this->titulares[0]->getNombre()}</li>
        END;
        foreach ($this->titulares as $titular) {
            $res = $res.$titular;
        }
        return $res;
    }

}
?>