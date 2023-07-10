<?php 

    class food extends Prodotto {
        public $pesoNetto;
        public $ingredienti;
        
        public function __construct($nome, $prezzo, $pesoNetto, $ingredienti, $immagine) {
            parent::__construct($nome, $prezzo, $immagine);
            $this->pesoNetto = $pesoNetto;
            $this->ingredienti = $ingredienti;
        }
    }

?>