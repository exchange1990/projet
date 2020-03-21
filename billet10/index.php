<?php
require_once "php/glossaire.php";
function afficher($tableau){

    $lenght=count($tableau);
    $index=mt_rand(0,$lenght-1);
    $title=$tableau[$index]['title'];
    $description=$tableau[$index]['description'];
    $text="<h1>$title</h1><p>$description</p>";
    echo $text;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form action="">

    <button>actualiser </button>
    <?php  afficher($glossaire); ?>
    </form>
   
    
</body>
</html>
    

