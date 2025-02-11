<?php

    class Veicolo {

        protected $marca;
        protected $anno;

        function __construct($marca, $anno) {
            $this->marca = $marca;
            $this->anno = $anno;
        }

        function getMarca(): string {
            return $this->marca;
        }
    
        function getAnno(): int {
            return $this->anno;
        }

}

?>
