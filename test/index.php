<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">

<label >entrer la categorie</label><br>
<input type="text" name="categorie" placeholder="categorie" required><br>

<label >entrer l titre</label><br>
<input type="text" name="titre" placeholder="titre" required><br>

<label >entrer le chemin de votre image</label><br>
<input type="text" disabled name="image"  value="assets/img/photo-virus.jpeg" required><br>

<label>enter le contenu</label><br>
<textarea name="contenu" cols="30" rows="10"></textarea><br>

<label>la date de publication</label><br>
<input type="text" disabled name="datepublication" value=<?php echo date("Y-m-d H:i:s"); ?>><br>

<input type="submit" value="envoyer">
</form>
    
</body>
</html>