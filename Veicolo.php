<?php 

class Veicolo { 

    protected $marca = "";
    protected $anno = 0;

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getAnno(){
        return $this->anno;
    }

    public function setAnno($anno){
        $this->anno = $anno;
    }






}


?>
