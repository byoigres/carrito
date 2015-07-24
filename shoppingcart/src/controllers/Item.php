<?php
namespace Coppel\Controllers;

use Coppel\Yelu\BaseController;

class Item extends BaseController
{
    public function __construct()
    {

    }

    public function listPage()
    {
        $itemModel = $this->getModel('Item');

        $items = $itemModel->getItems();
        var_dump($items);

        #$this->render('items/list');
    }

    public function __destruct()
    {

    }
}
