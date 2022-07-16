<?php

function multipleCheck($number){
    $datas = array();

    for($i = 1; $i <= 100; $i++){
        if($i % $number == 0){
            $datas[] = $i;
        }
    }

    return $datas;
}

for ($i = 1; $i <= 100; $i++){

    $multiple = multipleCheck($i);

    if(count($multiple) > 1){
        echo $i . " [" . implode(", ",  $multiple) . "]";
    }else{
        echo $i . " [PRIME]";
    }

    echo "<br>";

}



