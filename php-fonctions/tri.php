<?php

$tableau = [
    ["nom" => "pierre", "age" => 45],
    ["nom" => "jean", "age" => 34],
    ["nom" => "martin", "age" => 51],
    ["nom" => "david", "age" => 29]
];

//Tri ASC par âge

$ages = array_column($tableau,'age');
array_multisort($ages,SORT_ASC,SORT_NUMERIC, $tableau);
print_r($tableau);
