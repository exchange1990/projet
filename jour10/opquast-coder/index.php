<?php
require_once "php/model/glossaire.php";
//print_r($glossaire);
function displayRandomTerm($array){
    $length = count($array);
    $index = mt_rand(0, $length - 1); 
    var_dump($index);
    echo '<pre>';
    print_r($array[$index]['title']);
    echo '<br>';
    print_r($array[$index]['description']);
    echo'</pre>';
    $title = $array[$index]['title'];
    $description = $array[$index]['description'];
    $html =
<<<OUTPUT
    <div class="container">
        <h1>Le terme est : {$title}</h1>
        <p>La définition est : {$description}</p>
    </div>
OUTPUT;

    echo $html;
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>glossaire des termes opquast</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="">
        <button type="submit" class="btn btn-success">Nouveau terme</button>
        <button type="submit" class="btn btn-secondary">Secondary</button>
        <button type="submit" class="btn btn-success">Success</button>
        <button type="submit" class="btn btn-danger">Danger</button>
        <button type="submit" class="btn btn-warning">Warning</button>
        <button type="submit" class="btn btn-info">Info</button>
        <button type="submit" class="btn btn-light">Light</button>
        <button type="submit" class="btn btn-dark">Dark</button>
    </form>

    <?php displayRandomTerm($glossaire); ?>

</body>
</html>