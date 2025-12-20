<?php
// Force l'affichage des erreurs sur la page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Vérification de l'existence du fichier avant le require
$laravelIndex = __DIR__ . '/../public/index.php';

if (!file_exists($laravelIndex)) {
    die("Erreur : Le fichier public/index.php est introuvable au chemin : " . $laravelIndex);
}

require $laravelIndex;
