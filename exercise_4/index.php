<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Controller\DataController;
use Exads\ABTestException;

$data = new DataController();

echo "<pre>";

//Input the promotion ID
$promoId = 1;
//Input the number of interaction. How many time the function getData() will be call
$numberInteraction = 5;

try {
    $showResult = array();

    for ($i = 0; $i < $numberInteraction; $i++){
        $showResult[] = $data->getData($promoId);
    }

    var_dump($showResult);

} catch (ABTestException $e) {
    var_dump($e->getMessage());
}
