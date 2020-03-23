<?php
require_once "php/form-validation.php";
$errormessage="";
if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])){
    $nom=validateInput($_POST['user']);
    $email=validateInput($_POST['email']);
    $password=validateInput($_POST['password']);
    $cpassword=validateInput($_POST['cpassword']);
    

    if(!comparePwd($password,$cpassword)){
        $errormessage="password d'ont match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <div class="form">
            <div>
            <label>username
                <input class="champs" type="text" name="user" placeholder="enter your username" required>
            </label>
            </div>
            <div>
            <label>email
                <input class="champ" type="email" name="email" placeholder="enter your email" required>
            </label>
            </div>
            <div>
            <label>password
                <input class="cham"  type="password" name="password" placeholder="enter your password" required>
            </label>
            </div>
            <div>
            <label>confirm password
                <input class="cha" type="password" name="cpassword" placeholder="confirm your password" required>
            </label>
            </div>
            <div>
                <input class="ch" type="submit" value="envoyer">
            </div>
        </div>
        <?php echo $errormessage;
        echo "<h2>merci pour vous $nom</h2>";
        ?>


    </form>


</body>

</html>