<section id="contact">
    <form action="#contact" method="post">
        <fieldset>
            <legend>contact de formulaire</legend>
            <label for="#nom">taper votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="taper votre nom" required>
            <label for="#email">taper votre email</label>
            <input type="email" id="email" name="email" placeholder="taper votre email" required>
            <label for="#message">taper votre message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <button type="submit">envoyer votre message</button>
        </fieldset>

    </form>
</section>

<?php

if (count($_REQUEST) > 0) {

    $nom        = $_REQUEST["nom"];
    $email      = $_REQUEST["email"];
    $message    = $_REQUEST["message"];


    echo "merci de votre message $nom ($email)";

    // ETAPE 4: SQL
    // ON VEUT MAINTENANT ENREGISTRER CE MESSAGE DANS UNE TABLE SQL
    // IL FAUT CONSTRUIRE LA BONNE REQUETE SQL
    $requeteSQL =
        <<<CODESQL

INSERT INTO utilisateur
(nom, email, message) 
VALUES 
('$nom', '$email', '$message');

CODESQL;

    // DEBUG
    // CODE SQL A ENVOYER
    // echo $requeteSQL;
    // IL FAUT QUE PHP SE CONNECTE A SQL
    // ET ENSUITE ENVOIE LA REQUETE SQL
    // https://www.php.net/manual/fr/pdo.construct.php
    $pdo = new PDO("mysql:dbname=siteVitrine;host=localhost;charset=utf8;", "root", "");

    // CODE FACILE MAIS PAS ASSEZ SECURISE
    // => ON VA FAIRE UN CODE PLUS COMPLIQUE ENSUITE

    // ICI ON ENREGISTRE LES INFOS DANS LA TABLE SQL contact
    // https://www.php.net/manual/fr/pdo.exec.php
    $pdo->exec($requeteSQL);
}

?>
</div>
</form>
<img src="assets/img/voiture.jpg" alt="voiture">
</section>