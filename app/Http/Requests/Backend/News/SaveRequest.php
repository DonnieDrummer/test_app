<?php
/**
 * Created by PhpStorm.
 * User: levcenkoivan
 * Date: 1/11/19
 * Time: 2:27 PM
 */

namespace App\Http\Requests\Backend\News;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    public function rules ()
    {
        return [
            'form.model.title' => 'required|string',
            'form.model.content' => 'required|string',
            'form.model.category_id' => 'integer|exists:news_categories,id',
        ];
    }
}
