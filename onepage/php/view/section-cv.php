<main>
    <section id="s1">
        <h2>accueil</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis corporis sit debitis, beatae asperiores quaerat id nesciunt fugiat, vero cumque cum explicabo eius eum eligendi. Beatae quia illo cum deleniti.</p>
    </section>
    <section id="s2">
        <h2>service</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis est provident magni eius eveniet commodi laborum libero nemo dolorem eum quas debitis quisquam molestias distinctio, modi dicta tempora minus vel!</p>
    </section>
    <section id="s3">
        <h2>galerie</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut rerum sequi fuga ratione ipsa magnam. Nisi ea reiciendis expedita aperiam quasi nobis cumque iusto, veritatis eum, quod sint blanditiis accusamus.</p>
    </section>
    <section id="s4">
        <h2>produit</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iure quas beatae, laborum eveniet atque, quibusdam doloremque consectetur ipsa tenetur cumque nam sint praesentium ea similique explicabo voluptatibus amet ad!</p>
    </section>
    
    <section id="s5">
        <h2>contact</h2>
        <form action="#s5" method="get">
        <input type="text" name="nom" placeholder="entrez votre nom" required>(*)
        <input type="email" name="email" placeholder="entrez votre email"required>(*)
        <textarea name="message" cols="60" rows="8" maxlength="1000" placeholder="entrez votre message" required></textarea>
        <button type="submit">envoyer votre message</button>
        <div> <?php require_once "php/controller/traitement-contact.php"?></div>
        </form>
    </section>
</main>