<?php


$names = [
        'Marko',
        'Boro',
        'Janko'
];

$animals = [
        'Pasce',
        'Macketina',
        'Stric takodje'
];

$person = [
        'age' => 33,
        'hair' => 'mrka',
        'career'=> 'web programer'
];

$person['name'] = "Marko";


$task = [
        'title'=>'Kupovina',
        'due_date'=>'22/01/20',
        'assigned'=>'Marko',
        'completed'=> True
];

require 'index.view.php';