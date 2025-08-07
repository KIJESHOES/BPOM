<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'category' => 'required|in:Obat,Pangan,Kosmetik,Obat Tradisional,Suplemen Kesehatan,Materi FKP',
            'link' => 'required|url',
        ];
    }
}
