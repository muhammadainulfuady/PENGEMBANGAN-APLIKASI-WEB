<?php

$person = array(
    'nama' => 'Adi',
    'usia' => 15,
    'pelajar' => True
);
echo $person['usia'];
$person['usia'] = 44;
$person['hobi'] = 'Bersepeda';
echo $person['hobi']; // OK
echo $person['dob']; // Runtime
if (array_key_exists('dob', $person)) {

    echo $person['dob']; // OK
}


?>