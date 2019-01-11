<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/10/19
 * Time: 9:58 PM
 */

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\News\SaveRequest;
use App\Repositories\NewsCategoryRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

/**
 * Class NewsController
 * @package App\Http\Controllers\Backend
 */
class NewsController extends BackendController
{
    /**
     * @var NewsCategoryRepository
     */
    protected $categories;

    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        $this->repository = new NewsRepository();
        $this->categories = new NewsCategoryRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexAction(Request $request)
    {
        $news = $this->repository->with(['category'])->get();

        return view('backend.index', compact('news'));
    }

    /**
     * @param Request $request
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editAction(Request $request, $id = null)
    {
        $categories = $this->categories->get();
        $news = $this->repository->getById($id);

        return view('backend.news.edit', compact('categories', 'news'));
    }

    /**
     * @param null $id
     * @param SaveRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeAction($id = null, SaveRequest $request)
    {
        $this->repository->store($request->input('form'));

        return redirect()->route('manager::index.get');
    }

    /**
     * @param null $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteAction($id = null, Request $request)
    {
        $this->repository->delete($id);

        return redirect()->route('manager::index.get');
    }
}
