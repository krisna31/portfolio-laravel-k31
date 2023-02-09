<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LocalRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'slug' => [
                'string',
                'required',
                'unique:locals',
                'min:3',
                'max:255'
            ],
            'landing_text' => ['string', 'max:255'],
            'landing_body' => ['string', 'max:255'],
            'intro_text' => ['string', 'max:255'],
            'contact_me_text' => ['string', 'max:255'],
            'contact_me_link' => ['string', 'max:255'],
            'bio_title' => ['string', 'max:255'],
            'bio_body' => ['string', 'max:255'],
            'project_title' => ['string', 'max:255'],
            'qoute_text' => ['string', 'max:255'],
            'quote_name' => ['string', 'max:255'],
            'social_text' => ['string', 'max:255'],
            'footer' => ['string', 'max:255'],
        ];
    }
}
