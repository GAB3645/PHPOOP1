<?php 

class Veicolo implements JsonSerializable { 
    


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


    public function jsonSerialize() : array{
        return [
            'marca' => $this->marca,
            'anno' => $this->anno
        ];
    }





}


?>

