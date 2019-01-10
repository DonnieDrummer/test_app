<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 9:16 PM
 */

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->repository = new NewsRepository();
    }

    public function indexAction($categoryId = null, Request $request)
    {
        return view('frontend.news.index');
    }
    
    public function viewAction($id, Request $request)
    {
        
    }
}