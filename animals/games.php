<?php 

    class games extends Prodotto {
        public $caratteristiche;
        public $dimensioni;
        
        public function __construct($immagine, $nome, $nomeAnimale, $prezzo, $caratteristiche, $dimensioni) {
            parent::__construct($immagine, $nome, $nomeAnimale, $prezzo);
            $this->caratteristiche = $caratteristiche;
            $this->dimensioni = $dimensioni;
        }
    }
    
?>