<!-- Creiamo un array consentente dei prodotti con Nome Prezzo Immagine Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->

<?php
$products = [
    [
        'id' => 1,
        'title' => 'Prodotto 1',
        'price' => 30,
        'img' => 'https://picsum.photos/200/300',
        'type' => 'Informatica',
    ],
    [
        'id' => 2,
        'title' => 'Prodotto 2',
        'price' => 21,
        'img' => 'https://picsum.photos/200/300',
        'type' => 'Fai da Te',
    ],
    [
        'id' => 3,
        'title' => 'Prodotto 3',
        'price' => 19,
        'img' => 'https://picsum.photos/200/300',
        'type' => 'Informatica',
    ],
    [
        'id' => 4,
        'title' => 'Prodotto 4',
        'price' => 21,
        'img' => 'https://picsum.photos/200/300',
        'type' => 'Cucina',
    ],
    [
        'id' => 5,
        'title' => 'Prodotto 5',
        'price' => 30,
        'img' => 'https://picsum.photos/200/300',
        'type' => 'Informatica',
    ],
    [
        'id' => 6,
        'title' => 'Prodotto 6',
        'price' => 19,
        'img' => 'https://picsum.photos/200/300',
        'type' => 'Fai da te',
    ],
];

$filteredProducts = [];

$genres = [];
$prices = [];
foreach ($products as $product) {
    if (!in_array($product['type'], $genres)) {
        $genres[] = $product['type'];
    }
    if (!in_array($product['price'], $prices)) {
        $prices[] = $product['price'];
    }
};

if (isset($_GET['genre']) !== false && isset($_GET['price']) !== false) {
    $genreSelected = $_GET['genre'];
    $priceSelected = $_GET['price'];
    if ($genreSelected === 'all' && $priceSelected === 'all') {
        $filteredProducts = $products;
    } else {
        foreach ($products as $product) {
            if ($product['type'] == $genreSelected) {
                $filteredProducts[] = $product;
            }
            if ($product['price'] == $priceSelected) {
                $filteredProducts[] = $product;
            }
        };
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="arrayFilter.php" method="GET">
            <select name="genre" id="genre">
                <option value="all">All</option>
                <?php foreach ($genres as $genre) : ?>
                    <option value="<?= $genre ?>"><?= $genre ?></option>
                <?php endforeach ?>
            </select>
            <select name="price" id="price">
                <option value="all">All</option>
                <?php foreach ($prices as $price) : ?>
                    <option value="<?= $price ?>"><?= $price ?></option>
                <?php endforeach ?>
            </select>
            <button>Cerca</button>
        </form>
        <?php foreach ($filteredProducts as $product) : ?>
            <div class="card">
                <img src="<?= $product['img'] ?>" alt="<?= $product['title'] ?>">
                <h1>Nome: <?= $product['title'] ?></h1>
                <h2>Tipologia: <?= $product['type'] ?></h2>
                <h3>Prezzo: <?= $product['price'] ?>€</h3>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>