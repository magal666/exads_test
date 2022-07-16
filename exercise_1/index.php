<?php

//I created that flag below because the translate is dubious and usually when I do that kind of exercise, about prime number
//I delivery a number "divisible", but the exercise asked me "multiple" number.
//For that reason I did the both possible results and separated for that flag.
//if the exercise is a prank, I print the result of a prank, else I print the result about prime numbers...LOL
$GLOBALS['isPrank'] = false;

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

    if($GLOBALS['isPrank']){

        //I use this because, first I think the exercise have a prank
        for($i = 1; $i <= 100; $i++){
            if($i % $number == 0){
                $datas[] = $i;
            }
        }

    }else{


        for($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $datas[] = $i;
            }
        }

    }

    return $datas;
}

echo "<pre>";

for ($i = 1; $i <= 100; $i++){

    if(!$GLOBALS['isPrank']){

        if(primeCheck($i)){
            echo $i . " [PRIME]";
        }else{
            echo $i . " [" . implode(", ",  multipleCheck($i)) . "]";
        }

    }else{

        //I use this because, first I think the exercise have a prank
        $multiple = multipleCheck($i);

        if(count($multiple) > 1){
            echo $i . " [" . implode(", ",  $multiple) . "]";
        }else{
            echo $i . " [PRIME]";
        }
    }


    echo "<br>";

}


