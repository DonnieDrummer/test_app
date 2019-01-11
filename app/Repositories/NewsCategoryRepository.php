<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 11:07 PM
 */

namespace App\Repositories;

use App\Contracts\Repository;
use App\Entities\NewsCategory;

class NewsCategoryRepository implements Repository
{
    protected $model;

    /**
     * NewsRepository constructor.
     */
    public function __construct()
    {
        $this->model = new NewsCategory();
    }

    public function get($limit = 10, $offset = 0)
    {
        return $this->model->offset($offset)->limit($limit)->orderBy('id', 'ASC')->get();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function with(array $relations = [])
    {
        return $this->model->with($relations);
    }

    public function store(array $data = [])
    {
        // TODO: Implement create() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
