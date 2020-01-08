<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'info@fotografija-grudnik.si';
        $name = 'Valentin Grudnik';
        $subject = 'Novo povpraševanje iz spletne strani';
        return $this->view('emails.mailme')
        ->from($address, $name)
        ->subject($subject)
        ->with([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'user_message' => $this->data['user_message'],
           
        ]);
    }
}
