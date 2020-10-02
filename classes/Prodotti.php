<?php

class Prodotti {
    public $codice;
    public $nome;
    protected $prezzo;
    protected $quantita;

    public function __construct($_codice, $_nome, $_prezzo, $_quantita) {
        $this->codice = $_codice;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->quantita = $_quantita;
    }

    public function getPrize() {
        if (empty($this->prezzo)) {
            die('prezzo non inserito');
        }
        return $this->prezzo * $this->quantita;
    }

};

?>