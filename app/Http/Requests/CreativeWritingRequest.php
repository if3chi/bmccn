<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class CreativeWritingRequest extends FormRequest
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
            "firstname" => "required|string|max:32",
            "lastname" => "required|string|max:32",
            "phone" => "nullable|phone:AUTO,US,BE,GH,NG",
            "email" => "required|email",
            "age" => "required|min:6|max:10|integer",
            "title" => "required|string",
            "essay" => [
                "required",
                function ($attribute, $value, $fail) {
                    $wordCount = Str::of($value)->wordCount();
                    if ($wordCount > 300) {
                        $fail("The {$attribute} cannot not be more than 300 words, you've got {$wordCount} word(s).");
                    } elseif ($wordCount < 64) {
                        $fail("The minimum allowed {$attribute} entrt is 64 words, you've got {$wordCount} word(s).");
                    }
                },
            ]
        ];
    }
}
