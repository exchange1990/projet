<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">

<label>votre nom
<input type="text" name="nom">
</label>
<label>votre prenom
<input type="text" name="prenom">
</label>
<input type="submit" name="envoyer">
<div>
<?php
if(isset($_POST['nom']) && isset($_POST['prenom'])){

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];


$requetesql=

'insert into contact
(nom,prenom)
values($nom,$prenom)';
$pdo=new PDO("mysql:dbname=blog;host=localhost;charset=utf-8","root","");
$pdo->exec($requetesql);







}

?>

</div>




</form>
    
</body>
</html>