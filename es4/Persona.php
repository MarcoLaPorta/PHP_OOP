<?php

    class Persona {

        protected $nome;
        protected $cognome;

        function __construct($nome, $cognome) {
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        function presentati(): string {
            return "Ciao, mi chiamo " . $this->nome . " " . $this->cognome . ".";
        }
    }

?>
