<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->mailData = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->mailData['email'];
        $fullname = $this->mailData['fullname'];
        $message = $this->mailData['message'];

        return $this->from($email, $fullname)
            ->replyTo($email, $fullname)
            ->subject("Message from {$fullname}")
            ->markdown('mail.front.contact-us')
            ->with([
                'name' => $fullname,
                'msg' => $message
            ]);
    }
}
