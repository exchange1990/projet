<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>anonymous morocco</h1>
    </header>
    <main>
        <form class="formulaire" method="post">
            <input class="inputname" type="text" name="name" placeholder="👤enter your username" required><br>
            <input class="inputname1" type="text" name="psw" placeholder="🔒enter your password" required><br>
            <input class="envoyer" type="submit" value="🇲🇦login">
            <div>
            <?php
            if(isset($_POST['name'])&&isset($_POST['psw'])){
                $name=$_POST['name'];
                $psw=$_POST['psw'];
                

            }
            
            




?>
</div>







        </form>
      
    </main>
    <footer>

    </footer>

</body>

</html>