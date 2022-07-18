<?php

namespace App\Controller;

use App\Util\Integration;

class DataController
{
    /**
     * @var Integration
     */
    protected Integration $integration;

    /**
     * @throws \Exads\ABTestException
     */
    public function __construct()
    {
        $this->integration = new Integration();
    }

    /**
     * @throws \Exads\ABTestException
     */
    public function getData(int $promoId): array
    {
        $dataIntegration = $this->integration->getData($promoId);

        $weights = array();
        foreach ($dataIntegration as $key => $value){
            $weights[$key] = $value['splitPercent'] / 100;
        }

        return $dataIntegration[$this->calculate($weights)];
    }

    /**
     * @param array $weights
     * @return int|string
     */
    public function calculate(array $weights): int
    {
        $result = 0.0;
        $rand = (float)rand() / (float)getrandmax();

        foreach ($weights as $value => $weight) {
            if ($rand < $weight) {
                $result = $value;
                break;
            }
            $rand -= $weight;
        }

        return $result;
    }
}
