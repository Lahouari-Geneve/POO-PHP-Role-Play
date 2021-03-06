<?php

// création du lien avec Base De Données
require '../config/database.php';

//Declaration de variables pour redirection de page
$id = $_GET["id"];

// On recherche la table Hero
$query = $pdo->query("SELECT * FROM Hero");
$hero = $query->fetch();
$idHero = $hero->id;
$heroMoney = $hero->bitcoin;

$selected_val = $_POST['buyWeapon'];  // Sauvegarde de la valeur en variable

// Recherche de l'arme 
$stmt = $pdo->prepare("SELECT * FROM Weapon WHERE id = ?");
$stmt->execute([$selected_val]);
$fetchWeapon = $stmt->fetch();
$wId = $fetchWeapon->id;
$wPrice = $fetchWeapon->bitcoin;

$coin = $heroMoney + ($wPrice / 2);

$pdo->query("UPDATE Hero SET bitcoin = $coin");

$pdo->query("DELETE FROM heroWeapon WHERE idWeapon = $wId");

header("location: nextPage.php");
