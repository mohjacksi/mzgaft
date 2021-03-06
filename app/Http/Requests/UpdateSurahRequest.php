<?php

namespace App\Http\Requests;

use App\Models\Surah;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSurahRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('surah_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'number' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
