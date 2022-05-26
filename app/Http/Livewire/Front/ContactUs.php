<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs as ContactUsMail;

class ContactUs extends Component
{
    public $fullname;
    public $email;
    public $message;

    public $rules = [
        'fullname' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|max:5000'
    ];

    public function sendMessage()
    {
        $validatedData = $this->validate();
        Mail::to('care@bmccn.org')
            ->queue(new ContactUsMail($validatedData));
        $this->reset(['fullname', 'email', 'message']);

        $this->notify([
            'titleText' => 'Message Sent',
            'text' => 'We will get back to you at the soonest.',
            'icon' => 'success',
        ]);
    }

    public function render()
    {
        return view('livewire.front.contact-us');
    }
}
