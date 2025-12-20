<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    require __DIR__ . '/../public/index.php';
} catch (\Exception $e) {
    echo "Erreur Laravel : " . $e->getMessage();
} catch (\Throwable $t) {
    echo "Erreur Critique : " . $t->getMessage();
}
