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
        return $this->model->limit($limit)->offset($offset)->get();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function with(array $relations = [])
    {
        return $this->model->with($relations);
    }

    public function store(array $data = [])
    {
        if (!empty($data['row']['id'])) {
            $this->model = $this->model->find($data['row']['id']);
        }

        foreach ($data['model'] as $prop => $value) {
            $this->model->{$prop} = $value;
        }

        $this->model->save();

        return $this->model;
    }

    public function delete($id)
    {
        $this->model->destroy($id);
    }

    public function whereCategory($filedValue = null)
    {
        return ($filedValue) ? $this->model->where('category_id', $filedValue) : $this->model;
    }
}
