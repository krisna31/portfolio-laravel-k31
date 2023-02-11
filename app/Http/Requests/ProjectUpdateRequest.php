<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'local_id' => ['required', 'integer'],
            'title' => ['required', 'string', 'max:255'],
            'link_github' => ['required', 'string', 'max:255'],
            'image' => ['image', 'mimes:png,jpg,jpeg,gif,svg', 'max:3072'],
        ];
    }
}
