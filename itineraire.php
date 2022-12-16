<?php
require_once('data.php');

$depart = $_POST['depart'] ? $_POST['depart'] : '';
$arrivee = $_POST['arrivee'] ? $_POST['arrivee'] : '';
$resultat = []; // représentez l'itinéraire sous la forme d'un tableau de noeuds et de distance

// if ($arrivee $parsed_json->{'links'}->{$depart})
$erreur = NULL; // Au cas où...
session_start();

// Réalisez le traitement des informations de départ et d'arrivée ici. Faites
// attention aux itinéraires nuls (point d'arrivée = point de départ).

/*
en gros ici il faut check par rapport a la ville de départ si un itinéaire 
direct est possible vers la ville d'arrivé, sinon faire une boucle foreach
pour prendre tous les itineraire qui sont possible en passant par une autre 
ville (une seule ville d'escale au max sinon le trajet peut etre turbo long c'est chiant),
ensuite on a plein d'intineraire possible,
mais en gros le calcul c'est de faire distanceville1 vers ville2 + ville2 vers villearrivé
et ça nous donne l'itinéraire
on prend celui avec le 
chiffre finale le plus bas et ça nous donne l'itinéraire le plus rapide (en nombre de km j'imagine)
*/


$_SESSION['resultat'] = $resultat;
$_SESSION['erreur'] = $erreur;

header("Location: index.php");
