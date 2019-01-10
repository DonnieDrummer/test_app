<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 10:55 PM
 */

namespace App\Entities;

use Eloquent;

class NewsCategory extends Eloquent
{
    protected $table = 'news_categories';
    
    protected $fillable = [
        'name', 'visible'
    ];
}