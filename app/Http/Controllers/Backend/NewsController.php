<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 9:58 PM
 */

namespace App\Http\Controllers\Backend;

use App\Repositories\NewsCategoryRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends BackendController
{
    protected $categories;

    public function __construct()
    {
        $this->repository = new NewsRepository();
        $this->categories = new NewsCategoryRepository();
    }

    public function indexAction(Request $request)
    {
        return view('backend.index');
    }

    public function editAction(Request $request)
    {
        $categories = $this->categories->get();
        
        return view('backend.news.edit', compact('categories'));
    }
    
    public function storeAction($id = null, Request $request)
    {
        
    }
}