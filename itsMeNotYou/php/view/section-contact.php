<section class="contact">
    <form action="contact" method="post">
        
            <label>votre nom
                <input type="text" name="nom" placeholder="entrer votre nom" required>
            </label>
            <label>votre prenom
                <input type="text" name="prenom" placeholder="entrer votre prenom" required>
            </label>
            <label>votre message
                <textarea name="message" cols="30" rows="10"></textarea>
            </label>
            <input type="submit" value="envoyer">
        
        <div>
            <?php

            if (isset($_REQUEST["nom"]) && isset($_REQUEST["prenom"]) && isset($_REQUEST["message"])) {
                $nom = $_REQUEST["nom"];
                $prenom = $_REQUEST["prenom"];
                $message = $_REQUEST["message"];
               
            }
            echo 'votre message a ete envoye' . $nom . ' ' . $prenom.'votre message ete'.$message;



            ?>
        </div>

    </form>

</section>