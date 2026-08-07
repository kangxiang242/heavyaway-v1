<?php


namespace App\Repository;


use App\Models\Goods;

class GoodsRepository extends BaseRepository
{
    public function __construct(Goods $goods)
    {
        $this->model = $goods;
    }
}
