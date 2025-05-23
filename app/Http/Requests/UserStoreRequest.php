<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        return [
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
            'phone' => ['nullable', 'max:255', 'string'],
            'pass_type' => ['nullable', 'in:premium,event,concert'],
            'usn' => ['nullable', 'max:255', 'string'],
            'uid' => ['nullable', 'max:255', 'string'],
            'transaction_id' => ['nullable', 'max:255', 'string'],
            'college_name' => ['nullable', 'max:255', 'string'],
            'payment_screenshot' => ['image', 'max:1024'],
            'id_card' => ['image', 'max:1024'],
            'is_paid' => ['nullable', 'boolean'],
            'roles' => 'array',
            'premium_pass_concert' => ['nullable', 'boolean'],
        ];
    }
}
