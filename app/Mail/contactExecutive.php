<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contactExecutive extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $phone;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact, $phone, $email, $message)
    {
        $this->contact = $contact;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() { 
        return $this->subject('Nuevo Registro - Formulario de Contacto')
                    ->markdown('emails.executive');
    }
}
