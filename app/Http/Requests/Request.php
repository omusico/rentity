<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public function rules()
    {
        $size = env('UPLOAD_SIZE_LIMIT');
        return [
            'cover' => 'max:' .$size . '|mimes:jpg,jpeg,png,bmp,svg,gif'
        ];
    }
}
