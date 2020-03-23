<?php
if(isset($_POST['categorie'])&&isset($_POST['titre'])&&isset($_POST['image'])&&isset($_POST['contenu'])&&isset($_POST['datepublication'])){
    $tabeauassocolone=extract($_post);
    $requetesql="insert into news (:categorie,:titre,:image,:contenu,:datepublication)VALUE(

}