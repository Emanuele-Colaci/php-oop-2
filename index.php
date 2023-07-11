<?php 

    include './animals/tools.php';
    include './animals/games.php';
    include './animals/food.php';

    class Prodotto {
        public $immagine;
        public $nome;
        public $nomeAnimale;
        public $prezzo;
        
        public function __construct(String $immagine, String $nome, String $nomeAnimale, Float $prezzo) {
            $this->immagine = $immagine;
            $this->nome = $nome;
            $this->nomeAnimale = $nomeAnimale;
            $this->prezzo = $prezzo;
        }
        
        public function getImmagine() {
            return $this->immagine;
        }
    }

    $animals = [
        new Food("https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg", "Royal Canin Mini Adult", "<i class='fa-solid fa-dog'></i> Cane", 43.99, "545 g", "Prosciutto, riso"),
        new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "<i class='fa-solid fa-dog'></i> Cane", 44.99, "600 g", "Manzo, Cereali"),
        new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Almo Nature Cat Daily Lattina", "<i class='fa-solid fa-cat'></i> Gatto", 34.99, "400 g", "Tonno, Pollo, Prosciutto"),
        new Food("https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Mangime per Pesci Guppy in Fiocchi", "<i class='fa-solid fa-fish'></i> Pesce", 2.95, "30 g", "Pesci e sotto prodotti dei pesci, Cereali, Lieviti, Alghe"),
        new Tools("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Voliera Wilma in Legno", "<i class='fa-solid fa-dove'></i> Uccello", 184.99, "Legno", "M: L 83 x P 67 x H 153 cm"),
        new Tools("https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Cartucce Filtranti per Filtro EasyCrystal", "<i class='fa-solid fa-fish'></i> Pesce", 2.29, "Materiale espanso", "ND"),
        new Games("https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Kong Classic", "<i class='fa-solid fa-dog'></i> Cane", 13.49, "Galleggia e rimbalza", "8.5 cm x 10 cm"),
        new Games("https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Topini di peluche Trixie", "<i class='fa-solid fa-cat'></i> Gatto", 4.29, "Morbido con codina in corda", "8.5 cm x 10 cm")
    ];
     


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Boolshop</title>
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <header class="pb-5 mt-1 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Boolshop</h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <?php foreach($animals as $animal) { ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="<?php echo $animal->getImmagine(); ?>" class="card-img-top" alt="<?php echo $animal->nome; ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $animal->nome; ?></h4>
                                    <p class="card-text"><?php echo $animal->nomeAnimale; ?></p>
                                    <p class="card-text">Prezzo: € <?php echo $animal->prezzo; ?></p>
                                    <!-- Verifica se l'oggetto è un'istanza di una classe specifica o di una sua classe derivata -->
                                    <?php if($animal instanceof Food) { ?>
                                        <p class="card-text">Peso netto: <?php echo $animal->pesoNetto; ?></p>
                                        <p class="card-text">Ingredienti: <?php echo $animal->ingredienti; ?></p>
                                    <?php } elseif($animal instanceof Tools) { ?>
                                        <p class="card-text">Materiale: <?php echo $animal->materiale; ?></p>
                                        <p class="card-text">Dimensioni: <?php echo $animal->dimensioni; ?></p>
                                    <?php } elseif($animal instanceof Games) { ?>
                                        <p class="card-text">Caratteristiche: <?php echo $animal->caratteristiche; ?></p>
                                        <p class="card-text">Dimensioni: <?php echo $animal->dimensioni; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </body>
</html>