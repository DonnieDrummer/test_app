<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 9:17 PM
 */

namespace App\Repositories;

use App\Contracts\Repository;
use App\Entities\News;
use Eloquent;

class NewsRepository implements Repository
{
    protected $model;

    /**
     * NewsRepository constructor.
     *
     * @param Eloquent $model
     */
    public function __construct()
    {
        $this->model = new News();
    }

    public function get($limit = 10, $offset = 0)
    {
        // TODO: Implement get() method.
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function with(array $relations = [])
    {
        return $this->model->with($relations);
    }

    public function create(array $data = [])
    {
        // TODO: Implement create() method.
    }

    public function update($id, array $data = [])
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}