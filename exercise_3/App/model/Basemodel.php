<?php

namespace App\Model;

use App\Util\Database;

class BaseModel
{
    protected $bd;

    public function __construct()
    {
        $this->bd = Database::getInstance();
    }
}
