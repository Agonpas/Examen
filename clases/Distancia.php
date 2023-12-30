<?php
include_once 'Arma.php';
class Distancia extends Arma {
    private int $municion;
    private int $alcance;

    public function __construct(string $nombre, int $potencia, int $municion, int $alcance){
        parent::__construct($nombre, $potencia);
        $this->municion = $municion;
        $this->alcance = $alcance;
    }
    /*getters*/
    public function setMunicion(int $municion) {
        $this->municion = $municion;
    }

    public function setAlcance(int $alcance) {
        $this->alcance = $alcance;
    }

    public function getMunicion() {
        return $this->municion;
    }
    public function getAlcance() {
        return $this->alcance;
    }
    public function disparar() {
        if ($this->municion <= 0) {
            echo "No tienes balas, recarga el arma." . PHP_EOL;
        } else {
            $this->setMunicion($this->municion - 1);
            echo "Has efectuado un disparo. Te quedan " . $this->getMunicion() . " balas" . PHP_EOL;
        }
    }
    public function dispararRafaga() {
        if ($this->municion <= 0) {
            echo "No tienes balas, recarga el arma." . PHP_EOL;
        } elseif ($this->municion - 50 < 0) {
            echo "No tienes munición suficiente para efectuar una rafaga" . PHP_EOL;    
        } else {
            $this->setMunicion($this->municion - 50);
            echo "Has efectuado un rafaga. Te quedan " . $this->getMunicion() . " balas" . PHP_EOL;
        }
    }
    public function recargarArma(){
        if ($this->municion == 100) {
            echo "El arma ya está a su máxima capacidad de carga". PHP_EOL;

        } else {
            $this->setMunicion(100);
        }
    }

}
?>