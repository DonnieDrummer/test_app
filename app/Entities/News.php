<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 9:36 PM
 */

namespace App\Entities;

use Eloquent;

class News extends Eloquent
{
    protected $table = 'news';

    public function category()
    {
        return $this->hasOne(NewsCategory::class, 'id', 'category_id');
    }
}