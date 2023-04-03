<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',

            'main_image' => 'nullable|file',
            'preview_image' => 'nullable|file',

            'category_id' => 'required|integer|exists:categories,id',

            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Это поле обязательно для заполнения',
            'content.string' => 'Данные должны соответствовать строчному типу',

            'main_image.required' => 'Изображение обязательно для заполнения',
            'main_image.file' => 'Необходимо добавить файл',
            'preview_image.required' => 'Изображение обязательно для заполнения',
            'preview_image.file' => 'Необходимо добавить файл',

            'category_id.required' => 'Категория обязательна для заполнения',
            'category_id.integer' => 'Категория обязательна для заполнения',
        ];
    }
}
