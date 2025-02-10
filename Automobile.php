<?php

class Automobile extends Veicolo {
    private $modello;

    public function getModello() {
        return $this->modello;
    }

    public function setModello($modello) {
        $this->modello = $modello;
    }
}
