<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           'name' => ['required'],
           'email' => ['required', 'email', 'unique:applications'],
           'message' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Вы должны обязательно указать ваше Имя',
            'email.required' => 'Вы должны обязательно указать вашу почту',
            'email.unique' => 'Вы не можете оставить повторно заявку. Укажите другую почту',
            'message.required' => 'Вы должны обязательно написать сообщение для Заявки',
        ];
    }
}
