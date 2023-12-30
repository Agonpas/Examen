<?php
class  Arma {
    protected string $nombre;
    protected int $potencia;

    public function __construct(string $nombre, int $potencia) {
        $this->nombre = $nombre;
        $this->potencia = $potencia; 
    }
    /*setters*/
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
    public function setPotencia(int $potencia){
        $this->potencia = $potencia;
    }

    /*getters*/
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPotencia(): int {
        return $this->potencia;
    }
   
}

?>