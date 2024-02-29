<?php 

$tab = ['a', 1, "test", 23, 3.5];

function findArrayByType (array $array, string $type) {
    $myFonction = "is_$type";
    $result = [];
    foreach ($array as $element):
        if($myFonction($element)) {
            $result[] = $element;
        }
    endforeach;
    return $result;
}

var_dump(findArrayByType($tab,"float"));