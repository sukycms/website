<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class NewsletterRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                Rule::unique('newsletters', 'email'),
            ],
        ];
    }
}
