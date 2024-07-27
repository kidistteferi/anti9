<?php

namespace App\Http\Requests\Head;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Head\Head;

class CreateHeadRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Head::$rules;
    }
}
