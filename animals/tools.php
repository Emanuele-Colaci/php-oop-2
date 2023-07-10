<?php 

    class Tools extends Prodotto {
        public $materiale;
        public $dimensioni;
        
        public function __construct($immagine, $nome, $nomeAnimale, $prezzo, $materiale, $dimensioni) {
            parent::__construct($immagine, $nome, $nomeAnimale, $prezzo);
            $this->materiale = $materiale;
            $this->dimensioni = $dimensioni;
        }
    }
    
?>