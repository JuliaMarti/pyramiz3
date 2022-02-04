<?php 

define('X', 1);
define('Y', 0);

define('LIMIT_X', 3);
define('LIMIT_Y', 3);

$initial = $_POST['initial'];
$itmes = $_POST['itmes'];


function stringToArray($string){
    $string = substr($string,1);
    $string = substr($string,0,-1);

    $array = explode( ',', $string );

    // Me convierte a enteros toda string que sea puramente númerica, cómo en el caso de $initial
    $array = array_map(function($a) { 
        if(preg_match_all("/^[[:digit:]]+$/", $a)){
            return intval($a);
        } else return $a;
        },$array);

    return $array;
}


$initial = stringToArray($initial);
$itmes = stringToArray($itmes);

$movements = [];


foreach ($itmes as $key => $itme) {

    // Dependiendo la direccipon, selecciono el eje y si "suma" o "resta"
    switch ($itme) {
        case 'U':
            $axis = Y;
            $sign = -1;
            break;
        case 'R':
            $axis = X;
            $sign = 1;
            break;
        case 'D':
            $axis = Y;
            $sign = 1;
            break;
        case 'L':
            $axis = X;
            $sign = -1;
            break;
    }
    move($axis, $sign);
}


function move($axis, $sign){
    global $movements;
    global $initial;

    $last = empty($movements) ? $initial : end($movements);

    $newStep = $sign + $last[$axis];

    $limit = $axis == Y ? LIMIT_Y : LIMIT_X;

    if($newStep < $limit && $newStep >= 0){
        $newPosition = [];
        $newPosition[$axis] = $newStep;
        $newPosition[!$axis] = $last[!$axis];

        array_push($movements,[$newPosition[0], $newPosition[1]]);
    }
}

$result['movements'] = $movements;


echo json_encode($result);



?>