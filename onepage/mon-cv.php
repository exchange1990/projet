<?php
$titreCv     ="BOUABIDI ZAKARIA";
$profil      ="PROFIL";
$informations="INFORMATIONS PERSONNELLES";
$contact     ="CONTACT";
$education   ="L'ÉDUCATION";
$centre      ="CENTRE D'INTÉRÈTS";
$langue      ="LANGUES PARLÉES";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1><?php echo $titreCv?></h1>
        <nav>
        <a href="#s1">PROFIL</a>
        <a href="#s2">INFORMATIONS PERSONNELLES</a>
        <a href="#s3">CONTACT</a>
        <a href="#S4">L'ÉDUCATION</a>
        <a href="#S5">CENTRES D'INTÉRÈTS</a>
        <a href="#S6">LANGUES PARLÉES</a>
        </nav>
    </header>
    <main>
        <section id="s1">
            <h2><?PHP echo $profil ?></h2>
            <p>sérieux et engagé,je suis reconnu pour ma patience,ma persévérance ainsi que mon assiduité.
            autonome,j'aime atteindre mes objectifs.suis quelqu'un d'ouvert et d'avenant,toujours en quete
            de nouveaux horizons</p>
        </section>
        <section id="s2">
            <h2><?PHP echo $informations ?></h2>
            <h3>date de naissance</h3>
            <p>08/02/1990</p>
            <h3>nationalité</h3>
            <p>marocaine</p>
            <h3>adresse</h3>
            <p>26 rue des trois mages,13006 marseille</p>
            <h3>état civil</h3>
            <p>marocain</p>
        </section>
        <section id="s3">
            <h2><?php echo $contact ?></h2>
            <a href="mailto:exchangezak@gmail.com">exchangezak@gmail.com</a><br>
            <a href="tel:+0768476993">0768476993</a>
        </section>
        <section id="s4">
            <h2><?php $education ?></h2>
            <ul>
            <li>
            <h3>baccalauréat section scientifique,option sciences de vie et de la terre</h3>
            <p>groupe scolaire farabi2,casablanca</p>
            </li>
            <li>
            <h3>première année sciences,matière physique-chimie(smpc)</h3>
            <p>université hassan 2, casablanca</p>
            </li>
            <li>
            <h3>première année développement informatique</h3>
            <p>ofppt ntic 2, casablanca</p>
            </li>
            </ul>
        </section>
        <section id="s5">
             <h2><?php echo $centre ?></h2>
             <p>informatique,sport,voyages,musique</p>
        </section>
        <section id="s6">
             <h2><?php echo $langue ?></h2>
             <p>arabe,français</p>
        </section>
    </main>
    <footer>
        
    </footer>
    
</body>
</html>