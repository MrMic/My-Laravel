<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    // ______________________________________________________________________
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:20'],
            'email' =>  ['required','email'],
            'subject' => ['required','max:255'],
            'message' => ['required','max:5000'],
        ];
    }

    // INFO: Overriding messages function, define in FormRequest Class ______
    public function messages(): array
    {
        return [
            'name . required' => 'The name field is required . ',
            'name . min' => 'The name must be at least 3 characters . ',
            'name . max' => 'The name may not be greater than 20 characters . ',
            'email . required' => 'The email field is required . ',
            'email . email' => 'The email must be a valid email address . ',
            'subject . required' => 'The subject field is required . ',
            'subject . max' => 'The subject may not be greater than 255 characters . ',
            'message . required' => 'The message field is required . ',
            'message . max' => 'The message may not be greater than 5000 characters . ',
        ];
    }
}
