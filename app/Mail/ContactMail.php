<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data) // Ensure data is an array
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('your-email@example.com')
                    ->subject($this->data['subject'])
                    ->view('emails.contact') // Ensure this view exists
                    ->with('data', $this->data);
    }
}
