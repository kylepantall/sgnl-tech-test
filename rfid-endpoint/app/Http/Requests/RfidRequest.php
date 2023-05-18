<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RfidRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /** @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string> */
    public function rules(): array
    {
        return [
            'cn' => 'required|alpha_num:ascii|size:32'
        ];
    }
}
