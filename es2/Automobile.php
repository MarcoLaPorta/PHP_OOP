<?php

    include "Veicolo.php";

    class Automobile extends Veicolo {

        protected $modello;

        function __construct($marca, $anno, $modello) {
            parent::__construct($marca, $anno);
            $this->modello = $modello;
        }

        function getModello(): string {
            return $this->modello;
        }

        function setModello($modello) {
            $this->modello = $modello;
        }
        
    }

?>
