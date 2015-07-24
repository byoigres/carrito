<?php

namespace Coppel\Models;

use Coppel\Yelu\BaseModel;

class Item extends BaseModel
{
    public function __construct()
    {

    }

    public function getItems()
    {
        $dbh = $this->getConnection();

        $sth = $dbh->query("SELECT * FROM items;");

        return $sth->fetchAll();
    }
}
