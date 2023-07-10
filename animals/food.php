<?php 

    class Food extends Prodotto {
        public $pesoNetto;
        public $ingredienti;
        
        public function __construct($immagine, $nome, $nomeAnimale, $prezzo, $pesoNetto, $ingredienti) {
            parent::__construct($immagine, $nome, $nomeAnimale, $prezzo);
            $this->pesoNetto = $pesoNetto;
            $this->ingredienti = $ingredienti;
        }
    }

?>