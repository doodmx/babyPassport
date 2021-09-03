<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $phone, $email, $pregnancyWeek, $theme,$question;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailBody)
    {

        $this->name = $mailBody["name"];
        $this->phone = $mailBody["phone"];
        $this->email = $mailBody["email"];
        $this->pregnancyWeek = $mailBody["pregnancy_week"];
        $this->theme = $mailBody["theme"];
        $this->question = $mailBody["question"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Baby Passport - Formulario de contacto')
            ->from([
                'name' => $this->email,
            ])
            ->to('babypassport@medicalmeeting.co')
            ->text('emails.contact-form');
    }
}
