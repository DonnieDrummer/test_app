<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 9:16 PM
 */

namespace App\Http\Controllers;

use App\Repositories\NewsCategoryRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $categories;
    public function __construct()
    {
        $this->repository = new NewsRepository();
        $this->categories = new NewsCategoryRepository();
    }

    public function indexAction(Request $request, $categoryId = null)
    {
        $categories = $this->categories->get();
        $news = $this->repository->whereCategory($categoryId)->get();
        
        return view('frontend.news.index', compact('news', 'categories'));
    }
    
    public function viewAction(Request $request, $id)
    {
        
    }
}
