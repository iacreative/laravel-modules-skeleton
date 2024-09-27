<?php

namespace App\Abstracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class RepositoryEloquentAbstract
{
    /**
     * Set Eloquent Model
     *
     * @var Model
     */
    protected $model;

    /**
     * List all resources
     *
     * @param array $collums
     */
    public function listAll(array $collums = ['*']): Collection
    {
        return $this->model->get($collums);
    }

    /**
     * List resources by key value
     *
     * @param string $field
     * @param string $value
     */
    public function findByField(string $field, string $value): Collection|Model
    {
        return $this->model->where($field, $value)->get();
    }
}
