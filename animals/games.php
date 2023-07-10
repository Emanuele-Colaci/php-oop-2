<?php 

    class games extends Prodotto {
        public $caratteristiche;
        public $dimensioni;
        
        public function __construct($nome, $prezzo, $caratteristiche, $dimensioni, $immagine) {
            parent::__construct($nome, $prezzo, $immagine);
            $this->caratteristiche = $caratteristiche;
            $this->dimensioni = $dimensioni;
        }
    }
    
?>