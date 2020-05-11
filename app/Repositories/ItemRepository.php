<?php
namespace App\Repositories;

use App\Models\Item;

class ItemRepository extends EloquentRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Item::class;
    }
}
