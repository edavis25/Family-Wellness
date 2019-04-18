<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /** @var string */
    public $email;

    /** @var string */
    public $name;

    /** @var string */
    public $phone;

    /** @var string */
    public $contact_message;

    /**
     * Create a new message instance.
     *
     * @param string $email
     * @param string $name
     * @param string $phone
     * @param string $message
     */
    public function __construct($email, $name, $phone, $message)
    {
        $this->email = $email;
        $this->name  = $name;
        $this->phone = $phone;
        $this->contact_message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact-form')
            ->subject('New Contact from FamilyWellnessFoster.com');
    }
}
