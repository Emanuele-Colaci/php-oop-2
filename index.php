<?php 

    include './animals/tools.php';
    include './animals/games.php';
    include './animals/food.php';

    class Prodotto {
        public $nome;
        public $prezzo;
        public $immagine;
        public $nomeAnimale;
        
        public function __construct($nome, $prezzo, $immagine, $nomeAnimale) {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->immagine = $immagine;
            $this->nomeAnimale = $nomeAnimale;
        }
        
        public function getImmagine() {
            return $this->immagine;
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Boolshop</title>
    </head>
    <body>
        
    </body>
</html>