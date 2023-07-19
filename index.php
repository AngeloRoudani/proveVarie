<?php
require_once __DIR__.'/Models/Book.php';
require_once __DIR__.'/Models/Author.php';
require_once __DIR__.'/Models/Genre.php';

$space = new Genre('Space Opera', 'Fantascienza');
$AngeloRoudani = new Author('Angelo', 'Roudani');

$starfield = new Book('Starfield', $AngeloRoudani, '2023', $space, '46');

$starfield->setPrice(16);


//snippet verifica numero primo

$chooseOne = 2;

if(isset($_POST['insertNumber'])) {
    $chooseOne = $_POST['insertNumber'];
}
//var_dump($chooseOne);

function getNumbers($randomNumber) {
    $numbers = [];
    for ($i = 1 ; $i < $randomNumber + 1 ; $i++) {
        $numbers[] = $i;
    }
    return $numbers;
}


function verifyNumber($randomNumber) {

    $numbers = getNumbers($randomNumber);
    $newNumbers = array_slice($numbers, 1, $randomNumber - 2);

    $isPrimeNumber = true;
    
        foreach($newNumbers as $number) {

            if((($randomNumber % $number) == 0)) {
                $isPrimeNumber = false;
            }
        }
    var_dump($isPrimeNumber);
    

    if($isPrimeNumber) {
        return 'Il numero '. $randomNumber. ' è primo';
    } else {
        return 'il numero '. $randomNumber. ' non è primo';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

    <div>
        titolo:
        <?php echo $starfield->title ?>
    </div>

    <div>
        Autore:
        <?php echo $starfield->author->name . '' .
                   $starfield->author->lastName;   ?>
    </div>

    <div>
        data uscita:
        <?php echo $starfield->release_date ?>
    </div>

    <div>
        genere:
        <?php echo $starfield->genre->genre ?>
    </div>
    <div>
        prezzo:
        <?php echo $starfield->getPrice() ?>
    </div>

    <div>
        <form action="index.php" method="post">
            <label for="insertNumber">Inserisci un numero</label>
            <input id="insertNumber" type="number" name="insertNumber">
            <button type="submit">Invio</button>
        </form>
        <?php echo verifyNumber($chooseOne) ?>
    </div>

    <div class="starWrapper">


    </div>


    

    <script type="text/javascript" src="main.js"></script>
    
</body>
</html>