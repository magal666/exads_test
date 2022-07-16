<?php
namespace App\Model;

class TVSeriesModel extends BaseModel
{
    //protected $bd;

    public function __construct()
    {
        parent::__construct();
    }

    public function teste()
    {
        $sql = "SELECT * FROM tv_series ";
        $rs = $this->bd->prepare($sql);
        $rs->execute();

        var_dump($rs->fetchAll());
    }
}
