<?php

/*echo chr(44);
echo chr(124);*/

$elements = array();
$data = array();

echo "<pre>";

while(count($elements) < 81) {
    $n = rand(44, 124);
    if(empty($elements[$n])){
        $elements[$n] = chr($n);
    }

    if(count($elements) == 81){
        $data = $elements;
        $numDel = rand(44, 124);

        echo "<strong>MISSING CHARACTER:</strong> " . $data[$numDel] . " <strong>ASCII CODE:</strong> " . $numDel;
        unset($data[$numDel]);
    }
}
echo "<br>";
echo "<br>";
echo "<strong>RANDOM ARRAY: </strong> ";
echo "<br>";
var_dump($data);
