<!-- Crea e modella classi, a piacere, per gestire i prodotti di un magazzino. -->
<?php

require_once 'classes/Prodotti.php';
require_once 'classes/Cellulari.php';

/* richiesta prodotti generici */

$richiesta1 = new Prodotti('gen123', 'articoli_vari', 200, 50);

var_dump($richiesta1);

var_dump($richiesta1->getPrize());

/* richiesta cellulari con sconto quantita */

$richiestaCellulari = new Cellulari('cell123', 'samsung_galaxy', 200, 50, 0.8);
var_dump($richiestaCellulari);

var_dump($richiestaCellulari->getPrize());

?>