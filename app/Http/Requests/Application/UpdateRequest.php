<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'comment' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
          'comment.required' => 'Вы как администратор обязаны внести этот комментарий'
        ];
    }
}
