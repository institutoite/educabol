<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Unit;
use Illuminate\Validation\Rule;


class UnitRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'title' => 'required|min:1|max:200',
                    'course_id' => [
                        'required',
                        Rule::exists('courses', 'id')
                    ],
                    'file' => 'required|file',
                ];
            }
            case 'PUT':
            {
                return [
                    'title' => 'required|min:1|max:200',
                    'course_id' => [
                        'required',
                        Rule::exists('courses', 'id')
                    ],
                    'unit_type' => [
                        Rule::in(Unit::unitTypes())
                    ],
                    'file' => 'required_if:unit_type,'.Unit::ZIP.'|sometimes|file',
                ];
            }
            default: {
                return [];
            }
        }
    }
}
