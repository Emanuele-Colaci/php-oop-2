<?php 

    class Food extends Prodotto {
        public $pesoNetto;
        public $ingredienti;
        
        public function __construct(String $immagine, String $nome, String $nomeAnimale, Float $prezzo, String $pesoNetto, String $ingredienti) {
            parent::__construct($immagine, $nome, $nomeAnimale, $prezzo);
            $this->pesoNetto = $pesoNetto;
            $this->ingredienti = $ingredienti;
        }
    }

?>