<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ];
    }

    public function  messages()
    {
        return [
            'name.required' => 'Имя является обязательным полем',
            'name.string' => 'Поле должно быть строкой',
            'email.required' => 'Почта является обязательным полем',
            'email.unique' => 'Пользователь с такой почтой уже зарегистрирован',
            'email.email' => 'Почта должна соответствовать формату example@some.domain',
            'password.required' => 'Пароль является обязательным полем',
        ];
    }
}
