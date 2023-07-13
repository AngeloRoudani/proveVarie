<?php
require_once __DIR__.'/Models/Book.php';
require_once __DIR__.'/Models/Author.php';
require_once __DIR__.'/Models/Genre.php';

$space = new Genre('Space Opera', 'Fantascienza');
$AngeloRoudani = new Author('Angelo', 'Roudani');

$starfield = new Book('Starfield', $AngeloRoudani, '2023', $space, '46');

$starfield->setPrice(16);

function likes( $names ) {
      
    if(!isset($names)) {
      
      return "no one likes this";
      
    } else if (count($names) == 1) {
      
      return $names[0].' '.'likes this';
      
    } else if (count($names) == 2) {
      
      return $names[0].'and'. $names[1]. 'like this';
    } else if (count($names) == 3) {
      
      return $names[0].','.$names[1].'and'. $names[2]. 'like this';
    } else {
      
      return $names[0].','.$names[1].'and'. (count($names) - 2 ). 'like this';
    }
}

$stars = ['Gianni', 'Tarrukki', 'George', 'Frank']
  



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
    <?php echo likes( $stars ) ?>;
    </div>

    <input type="text" id="figa">
    <button onclick="getList()">aggiungi</button>
    <div id="list"></div>

    <script type="text/javascript" src="main.js"></script>
    
</body>
</html>