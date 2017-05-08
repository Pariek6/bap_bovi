<?php

$teachers = array ('ingrid', 'theo', 'joey');

echo $teachers[1];

//$teachers[1] = 'ed';

//var_dump($teachers);
//print_r($teachers);

//for($i = 0; $i = $i < 3;$i++)

   // echo '<p>' . $teachers[$i] . '</p>';

//$teacher[] = 'theo';

//array_push($teachers, 'theo', 'hugo', 'paul');

//foreach($teachers as $one_teacher) {
    //echo '<p>' . $one_teacher . '</p>';
//}

//assosiative array

$subject = array('ingrid' => 'bap', 'joey' => 'pro', 'jelle' => 'fro');

//echo $subject['ingrid'];

foreach($subject as $teacher => $one_subject) {
    echo $teachers . 'teaches' . $subject . '<br>';
}

