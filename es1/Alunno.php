<?php

class Alunno {

    protected $nome;
    protected $cognome;
    protected $eta;

    function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    function getNome(): string {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getCognome(): string {
        return $this->cognome;
    }

    function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    function getEta(): int {
        return $this->eta;
    }

    function setEta($eta) {
        $this->eta = $eta;
    }

    function stampaAlunno() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cognome: " . $this->cognome . "<br>";
        echo "Età: " . $this->eta . "<br><br>";
    }
}

?>
