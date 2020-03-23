<?php
$pdo=new PDO("mysql:host=localhost;dbname=article;charset=utf8;","root","");
$pdostate=$pdp->prepare($requetesql);
