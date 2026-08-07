<?php


namespace App\Repository;


class BaseRepository
{
    protected $model;

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }
}
