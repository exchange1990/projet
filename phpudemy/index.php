<?php
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    if ($_FILES['image']['size'] <= 8000000) {
        $informationImage = pathinfo($_FILES['image']['name']);
        $extensionImage = $informationImage['extension'];
        $extensionArray = ['png', 'gif', 'jpg', 'jpeg'];
        if (in_array($extensionImage, $extensionArray)) {
            move_uploaded_file($_FILES['image']['tmp_name'],'/upload' . time() .rand().rand().'.'.$extensionImage);
            echo 'envoi bien recu';
        }
    }
}
echo '<form method="post" action="index.php" enctype="multipart/form-data">
     <h1>formulaire</h1>
     <p>

     <input type="file" name="image"><br>
     <button type="submit" >envoyer</button>


     </p>




</form>';
?>