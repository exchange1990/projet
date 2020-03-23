<?php



function distribuerBillet($billet)
{
    $tab = [200, 100, 50, 20, 10, 5];
    $phrase = "";
    for ($i = 0; $i < count($tab); $i++) {
        if ($billet >= $tab[$i]) {
            $division = intval($billet / $tab[$i]);
            $billet = $billet - ($division * $tab[$i]);
            $phrase = $phrase . $division . "x" . $tab[$i] . ",";
        }
    }

    return $phrase;
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
    <form method="post">
        <label>
            <input type="text" name="billet" placeholder="entrer un nombre egal ou plus grand que 5" required>
        </label>
        <input type="submit" value="entrer">
        <div>
            <?php 
            if (isset($_POST["billet"])) {
                $billet = $_POST["billet"];}
                if ($billet < 5) {
                    echo "le nombre doit etre egal ou plus grand que 5";
            }
            
            else {
                echo distribuerBillet($billet);
            }
            ?>
        </div>

    </form>
</body>

</html>