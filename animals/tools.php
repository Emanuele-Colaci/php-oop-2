<?php 

    class tools extends Prodotto {
        public $materiale;
        public $dimensioni;
        
        public function __construct($nome, $prezzo, $materiale, $dimensioni, $immagine) {
            parent::__construct($nome, $prezzo, $immagine);
            $this->materiale = $materiale;
            $this->dimensioni = $dimensioni;
        }
    }
    
?>