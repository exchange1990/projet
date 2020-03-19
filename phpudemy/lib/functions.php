<?php

require_once 'config.php';

function getConnection()
{
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        // on essaie d'exécuter le code dans la partie try
        $db = new PDO(DSN, USERNAME, PWD, $options);
        // echo 'Succesfully connected to DB';
    } catch (PDOException $error) {
        // si erreur, on gère l'erreur et on récupère le message associé
        echo "Failed to connect to DB with error : {$error->getMessage()}";
    }

    return $db;
}

function createUniqueString($string, $delimiter)
{
    //  TODO extraire le code suivant dans une fonction utilitaire qu'on pourra réutiliser si besoin. La fonction prendra en paramètre une chaîne de caractères et retournera une nouvelle chaîne de caarctères correspondant au nouveau nom de fichier

    // on utilise une expression régulière pour trouver les espaces dans une chaîne de caractères
    $pattern = '/\s/';
    // on utilise preg_replace pour les remplacer
    $newString = preg_replace($pattern, $delimiter, $string);

    // on va générer un identifiant unique pour le fichier qu'on va sauvegarder pour éviter des conflits entre les noms des fichiers
    return uniqid().'-'.$newString;
}

// créer une fonction qui prendra en paramètre une requête et qui traitera les données de notre formulaire
function handleRequest($request)
{
    if (isset($request['fileUpload'])) {
        // on utilise extract pour se faciliter la vie et extraire les valeurs d'un tableau associatif dans des variables dont le nom correspond aux clé du tableau
        extract($request['fileUpload']);

        // on vérifie si pas d'erreur lors de l'upload
        if (UPLOAD_ERR_OK === $error) {
            $fileName = createUniqueString($name, '-');

            // on spécifie à quel endroit on va sauvegarder nos images sur le serveur
            $uploadsDir = 'uploads/';

            $path = $uploadsDir.$fileName;

            // sauvegarder l'image
            // on va utiliser une fonction php : move_uploaded_file()
            // cette fonction renvoie true si tout s'est bien passé, sinon false

            // 1er paramètre : chemin vers le stockage temporaire de l'image
            // 2ème paramètre : chemin complet vers le lieu de stockage sur le serveur
            if (move_uploaded_file($tmp_name, $path)) {
                // uploads/513153165-simplon.png
                echo "Le fichier {$fileName} a bien été sauvegardé";

                // ici on va sauvegarder l'image en BDD
                // étapes :

                // se connecter à la BDD
                $pdo = getConnection();
                // écrire sa requête SQL
                $sql = 'INSERT INTO images (name, path) VALUES (:name, :path)';
                // prépare la requête
                $pdoStatement = $pdo->prepare($sql);
                // exécuter la reqûete en associant les bonnes valeurs
                $file = [
                    ':name' => $name,
                    ':path' => $path,
                ];

                $pdoStatement->execute($file);
                // on confirme par un message à l'utilisateur avec un lien vers l'image sur le serveur
                echo "Le fichier a été sauvegardé dans la BDD. Il est visible <a href={$path} >ici</a>";
            } else {
                echo 'Erreur lors de la sauvegarde';

                return;
            }
        }
    }
}
