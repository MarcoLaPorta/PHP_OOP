<?php

    include "Persona.php";

    class Studente extends Persona {

        protected $matricola;

        function __construct($nome, $cognome, $matricola) {
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }

        function getMatricola(): string {
            return $this->matricola;
        }

        function presentati(): string {
            return parent::presentati() . " Sono uno studente con matricola: " . $this->matricola . ".";
        }
    }

?>
