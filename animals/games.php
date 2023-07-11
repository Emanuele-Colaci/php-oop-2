<?php 

    class Games extends Prodotto {
        public $caratteristiche;
        public $dimensioni;
        
        public function __construct(String $immagine, String $nome, String $nomeAnimale, Float $prezzo, String $caratteristiche, String $dimensioni) {
            parent::__construct($immagine, $nome, $nomeAnimale, $prezzo);
            $this->caratteristiche = $caratteristiche;
            $this->dimensioni = $dimensioni;
        }
    }
    
?>