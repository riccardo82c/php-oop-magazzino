<?php

class Prodotti {
    public $codice;
    public $nome;
    protected $prezzo;
    protected $quantita;

    public function __construct($_codice, $_nome, $_quantita) {
        $this->codice = $_codice;
        $this->nome = $_nome;

        $this->quantita = $_quantita;
    }

    public function getPrize() {
        if (empty($this->prezzo)) {
            die('Prezzo non inserito');
        }
        return $this->prezzo * $this->quantita;
    }

    public function setPrize($_prezzo) {
        $this->prezzo = $_prezzo;
    }

};

?>