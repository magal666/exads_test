<?php

namespace App\Controller;

use App\Model\TVSeriesModel;

class TVSeriesController
{
    protected $model;

    public function __construct()
    {
        $this->model = new TVSeriesModel();
    }

    public function getNextSeries($date = "", $time = "", $title = "")
    {
        return $this->model->getNextSeries($date, $time, $title);
    }
}
