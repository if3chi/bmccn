<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait CreativeWritingHelper
{
    public function rules()
    {
        return [
            'editing.firstname' => 'required|min:2|max:52|string',
            'editing.lastname' => 'required|min:2|max:52|string',
            'editing.email' => 'required|email',
            'editing.phone' => 'required|phone:AUTO,GH,NG',
            'editing.age' => 'required|min:6|max:10|numeric',
            "editing.title" => "required|string|max:255",
            "editing.essay" => [
                "required",
                function ($attribute, $value, $fail) {
                    $wordCount = Str::of($value)->wordCount();
                    if ($wordCount > 300) {
                        $fail("The Essay cannot not be more than 300 words, you've got {$wordCount} word(s).");
                    } elseif ($wordCount < 64) {
                        $fail("The minimum allowed Essay entry is 64 words, you've got {$wordCount} word(s).");
                    }
                },
            ]
        ];
    }

    protected $validationAttributes = [
        "editing.firstname" => 'First Name',
        "editing.lastname" => 'Last Name',
        "editing.title" => 'Essay Title',
        "editing.essay" => 'Essay',
    ];

    protected $messages = [
        'editing.firstname.required' => "Kindly give us your firstname?",
        'editing.lastname.required' => "What is your Lastname?",
        'editing.phone.required' => "It would be easy to call, if we have a phone number of a Parent/Guardian.",
        'editing.email.required' => "We need an email, so, we can let you know if you won.",
        'editing.age.required' => "How old are you?",
        'editing.age.min' => "Sorry, our age groups are between 6 - 10 yrs old.",
        'editing.age.max' => "Sorry, our age groups are between 6 - 10 yrs old.",
        'editing.title.required' => "How about a Title?",
        'editing.essay.required' => "We need your Essay to enter you into the competition."
    ];
}
