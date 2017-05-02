

<?php

$str = 'This is some text. I will be using PHP string functions to change it';
$str_lower = strtolower($str);
$str_camel = ucwords($str);
$str_first = lcfirst($str);
$str_replace = str_replace("PHP", "HTML", $str);
$str_camel2 = ucfirst($str);
$str_rev = strrev($str);
$str_upper = strtoupper($str);
$str_shuffle = str_shuffle($str);
$str_count = str_word_count($str);
$str_charcount = strlen($str);
$str_word = stripos('This is some text. I will be using PHP string functions to change it', "PHP");
$str_repeat1 = str_repeat($str, 2);



echo '<b> output </b>';
echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_camel . '</p>';
echo '<p>' . $str_first . '</p>';
echo '<p>' . $str_replace . '</p>';
echo '<p>' . $str_camel2 . '</p>';
echo '<p>' . $str_rev . '</p>';
echo '<p>' . $str_upper . '</p>';
echo '<p>' . $str_shuffle . '</p>';
echo '<p>' . "The number of words in strings:" . '</p>';
echo '<p>' . $str_count . '</p>';
echo '<p>' . "The number of words in strings:" . '</p>';
echo '<p>' . $str_charcount . '</p>';
echo '<p>' . "The word php starts at position:" . '</p>';
echo '<p>' . $str_word . '</p>';
echo '<p>' . $str_repeat1 . '</p>';


