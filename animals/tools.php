<?php 

    class Tools extends Prodotto {
        public $materiale;
        public $dimensioni;
        
        public function __construct(String $immagine, String $nome, String $nomeAnimale, Float $prezzo, String $materiale, String $dimensioni) {
            parent::__construct($immagine, $nome, $nomeAnimale, $prezzo);
            $this->materiale = $materiale;
            $this->dimensioni = $dimensioni;
        }
    }
    
?>