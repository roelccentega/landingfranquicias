<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GeneralContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
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
        return $this
            ->subject('Formulario de Contacto')
            ->replyTo($this->data['email'])
            // ->from($this->data['email'], $this->data['nombre'])
            ->view('emails.form-contact.contact')
            ->attach($this->data['file']->getRealPath(),[
                    'as'=>$this->data['file']->getClientOriginalName()
            ]);
    }
}
