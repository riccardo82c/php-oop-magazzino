<?php

/* proprietà classe Prodotti */
class Prodotti {
    protected $codice;
    public $nome;
    protected $prezzo;
    protected $quantita;

    //  costruttore Prodotti
    public function __construct($_codice, $_nome, $_quantita) {
        $this->codice = $_codice;
        $this->nome = $_nome;
        $this->quantita = $_quantita;
    }

    //  metodi Prodotti
    public function getPrice() {
        if (empty($this->prezzo)) {
            die('Prezzo non inserito');
        }
        return $this->prezzo * $this->quantita;
    }

    public function setPrice($_prezzo) {
        $this->prezzo = $_prezzo;
    }

};

?>