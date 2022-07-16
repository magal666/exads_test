<?php

function primeCheck($number){

    if ($number == 1){
        return 0;
    }

    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0){
            return 0;
        }
    }

    return 1;
}

function multipleCheck($number){
    $datas = array();

    for($i = 1; $i <= 100; $i++){
        if($i % $number == 0){
            $datas[] = $i;
        }
    }

    return $datas;
}

/*for ($i = 1; $i <= 100; $i++){

    $multiple = multipleCheck($i);

    if(count($multiple) > 1){
        echo $i . " [" . implode(", ",  $multiple) . "]";
    }else{
        echo $i . " [PRIME]";
    }

    if(primeCheck($i)){
       echo $i . " [PRIME]";
    }else{
       echo $i . " [" . implode(", ",  multipleCheck($i)) . "]";
    }


    echo "<br>";

}*/

echo "teste";

