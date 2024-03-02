<?php 

$tab = ['a', 1, "test", 23, 3.5];

/**
 * Cette fonction permet de récupérer un sous tableau en se basant
 * sur son type 
 * 
 * @param array $array : tableau en entrée 
 * @param string $type : le type des éléments à extraire
 * 
 * @return array le tableau résultant 
 * @throws Exception
 */
function findArrayByType (array $array, string $type) {
    $myFonction = "is_$type";
    if (!function_exists($myFonction)) {
        throw new Exception('Fonction innexistante');
    }
    $result = [];
    foreach ($array as $element):
        if($myFonction($element)) {
            $result[] = $element;
        }
    endforeach;
    return $result;
}

var_dump(findArrayByType($tab,"float"));