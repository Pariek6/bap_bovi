
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Mijn website - </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/main.css">

<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------

// Settings
include 'includes/config.php';

// head section <head>
include 'views/head.php';

// hier komt de header sectie etc.
include 'views/header.php';

// hier komt de navigatie
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        // go to home
        include 'views/home.php';
        break;
    case 'articles':
        // about
        break;
    case 'about':
        // about
        include 'views/about.php';
        break;
    case 'contact':
        // contact
        break;
}


// hier komt de content van de home page


// hier komt de footer
include 'views/footer.php';

?>