<?php
$datos = [
    'name' => 'Jorge Luis',
    'lastname' => 'Pintos',
    'age' => '34',
    'hobbie' => 'PC',
    'fCodeE' => 'vim',
    'os' => 'windows'
];

function showMenu($datos){
    echo "<ul>";
    foreach($datos as $dato1 => $dato2){
        echo "<li>$dato1 = $dato2</li>";
    }
    echo "</ul>";
}

