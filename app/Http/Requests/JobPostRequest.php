<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class JobPostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type_id' => 'required|integer',
            'location_id' => 'required|integer',
            'qualification' => 'required|string',
            'responsibility' => 'required|string',
            'experience' => 'string',
            'salary' => 'required|string',
            'benefits' => 'required|string',
            'email' => 'required|email',
            'company_id' => 'required|integer',
            'gender' => 'required|string',
            'vacancy' => 'required|integer',
            'deadline' => 'required|date',
            'status' => 'required|string',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            
        ];
    }
}
