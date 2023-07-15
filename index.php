<?php
require_once __DIR__.'/Models/Book.php';
require_once __DIR__.'/Models/Author.php';
require_once __DIR__.'/Models/Genre.php';

$space = new Genre('Space Opera', 'Fantascienza');
$AngeloRoudani = new Author('Angelo', 'Roudani');

$starfield = new Book('Starfield', $AngeloRoudani, '2023', $space, '46');

$starfield->setPrice(16);


//snippet verifica numero primo

$chooseOne = 72;

function getNumbers($verify) {
  $numbers = [];
  for ($i = 1 ; $i < $verify + 1 ; $i++) {
    $numbers[] = $i;
  }
  return $numbers;
}


function verifyNumber($randomNumber) {

  $numbers = getNumbers($randomNumber);
  $newNumbers = array_slice($numbers, 1, $randomNumber - 2);
  var_dump($newNumbers);
  
  foreach($newNumbers as $number) {

    if((($randomNumber % $number) == 0)) {
      return 'il numero '. $randomNumber. ' non è primo';
    } else {
      return 'Il numero '. $randomNumber. ' è primo';
    }
  }
}


  



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <?php echo verifyNumber($chooseOne) ?>
    </div>


    

    <script type="text/javascript" src="main.js"></script>
    
</body>
</html>