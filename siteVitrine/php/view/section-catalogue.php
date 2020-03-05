<section class="catalogue">
    <h2>catalogue</h2>
    <img class="imagePrincipal" src="assets/img/photo.jpeg" alt="image">
    <div class="container">
        <?php


        $global = glob("assets/img/image*.{jpeg,png,jpg,gif}", GLOB_BRACE);
        foreach ($global as $picture) {
            echo
<<<code
        <img src="$picture" alt="$picture">
code;
        }
        ?>
    </div>
</section>