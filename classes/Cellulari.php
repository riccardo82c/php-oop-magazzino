<?php

require_once 'Prodotti.php';

class Cellulari extends Prodotti {
    protected $scontoQuantita;

    public function __construct($_codice, $_nome, $_prezzo, $_quantita, $_scontoQuantita = 1) {
        parent::__construct($_codice, $_nome, $_prezzo, $_quantita);
        $this->scontoQuantita = $_scontoQuantita;
    }

    public function getPrize() {
        $prezzoPieno = parent::getPrize();
        $prezzoScontato = $this->prezzo * $this->quantita * $this->scontoQuantita;
        return [$prezzoPieno, $prezzoScontato];

    }
}

?>