<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 27/11/17
 * Time: 11:05
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormUpdateRequest extends FormRequest
{

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return[
//            'project_id' => 'required',
//            'form_id' => 'required',
//            'project_content' => 'required',
        ];
    }
}