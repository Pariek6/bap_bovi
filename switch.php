<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Fruits ( banana, kiwi and orange )</h1>
<form method="post">
    <input type="text" name="message">
    <input type="submit" name="submit" value="GO!">

</form>

<?php


$beverage = $_POST['message'];

switch($beverage)  {
    case 'banana':
        echo'Fruit is Banana';
        echo "<img src='http://www.fancyicons.com/free-icons/176/paradise-fruit/png/256/banana_256.png'>";
        break;
    case 'kiwi':
        echo'Fruit is kiwi';
        echo "<img src='http://www.zespri-sea.com/au/wp-content/uploads/sites/4/2015/05/kiwifruit-gold.png'>";
        break;
    case 'orange':
        echo'Fruit is orange';
        echo "<img src='http://pngimg.com/upload_small/orange/orange_PNG805.png'>";
        break;
    default:
        echo'I don\'t know what fuit that is';
}

?>

</body>
</html>
