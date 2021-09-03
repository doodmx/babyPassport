<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUser extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailBody)
    {
        $this->name = $mailBody["name"];
        $this->email = $mailBody["email"];
        $this->password = $mailBody["password"];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this
            ->subject('Baby Passport - Credenciales de Usuario')
            ->to($this->email)
            ->view('emails.mom-user');
    }
}
