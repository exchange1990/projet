<?php
require_once "php/model/glossaire.php";

function  displayRandomTerm($array)
{
    $lenght=count($array);
    $index=mt_rand(0,$lenght-1);
    $title=$array[$index]['title'];
    $description=$array[$index]['description'];
    $html=
    <<<html
    <div class="container">
    <div class="titre">
    <h1>le titre est: $title</h1>
    </div>
    <div class="description">
    <p>la description est: $description</p>
    </div>
    </div>

    html;
    echo $index;
    echo $html;
    
    
   
   
    

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>affichage d'un tableau aléatoirement</h1>
    </header>
    <main>
        <form action="">
        <?php echo displayRandomTerm($glossaire) ?>
            <label for="">actualiser</label>
            <input type="submit"  value="actualiser">
            
        </form>
    </main>
    <footer>
        <p>tous les droits sont résérvès</p>
    </footer>
    
</body>
</html>