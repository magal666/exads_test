<?php

namespace App\Util;

use Exads\ABTestData;

class Integration
{
    /**
     * @var int
     */
    protected int $bestPercent;

    /**
     * @throws \Exads\ABTestException
     */
    public function getData(int $promoId): array
    {
        $abTest = new ABTestData($promoId);
        //$this->promotion = $abTest->getPromotionName();
        //$designs = $abTest->getAllDesigns();

        return $abTest->getAllDesigns();
    }
}
