<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FileRequest extends Request {

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
        $size = env('UPLOAD_SIZE_LIMIT');
        return [
            'file' => 'max:' .$size . '|mimes:jpg,jpeg,png,bmp,svg,gif'
        ];
    }

}
