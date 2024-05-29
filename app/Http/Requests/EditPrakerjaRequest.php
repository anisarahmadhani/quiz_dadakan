<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPrakerjaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'email' => 'required',
            'telpon' => 'required|max:12',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'data harus diisi',
            'email.required' => 'data harus diisi',
            'telpon.required' => 'data harus diisi',
            'telpon.max' => 'max data 12',
            'alamat.required' => 'data harus diisi',
            'pendidikan_terakhir.required' => 'data harus diisi',
        ];

    }
}
