<main>
    <section id="s1">
    <div class="container">
    <?php
    $galerie= [ "image2.jpeg", "image3.jpeg", "image4.jpeg" ];
    foreach($galerie as $produit)
    {
        
        echo <<<html
        <img src="assets/img/$produit" alt="$produit">
        html;
    }
    ?>
    
   
  
    </div> 
    </section>
    <section id="s2">
    <h2>texte</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, iste facere ea nam, dolorum numquam perferendis aut sapiente reiciendis minus praesentium exercitationem quae ut ipsa illum fuga corrupti mollitia eius.</p>
    </section>
    <section id="s3">
    <h2>fin</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illum veritatis architecto nam explicabo omnis totam fugiat placeat maxime ipsa doloremque dolores alias distinctio impedit, blanditiis, perspiciatis dicta? Sed, facilis.</p>
    </section>
 
    
</main>