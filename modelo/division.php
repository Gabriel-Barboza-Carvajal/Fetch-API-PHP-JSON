<?php
/**
 * Description of division
 *
 * @author Gabriel Barboza Carvajal .
 */

abstract class division {

    private $numero, $nombre;
    

    public function __construct($numero, $nombre) {
        $this->numero = $numero;
        $this->nombre = $nombre;
    }


    public function __destruct() {
//        echo "<br>destruyendo obj general<br>";
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }
    
    abstract public function __serialize():array;
    abstract public function __unserialize(array $data):void;
    abstract public function __toString():string;
}
