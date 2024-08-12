<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboratoryUpdateRequest extends FormRequest
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
            'laboratory_id'        => ['required', 'string'],
            'ct_scan_id'           => ['required', 'string'], 
            'mri_id'               => ['required', 'string'],
            'xray_id'              => ['required', 'array'],
            'xray_id.*'            => ['required', 'string'],
            'ultrasount_scan_id'   => ['required', 'array'],
            'ultrasount_scan_id.*' => ['required', 'string'],
        ];
    }
}
