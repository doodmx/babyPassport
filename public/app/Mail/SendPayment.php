<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPayment extends Mailable
{
    use Queueable, SerializesModels;

    public $email, $payDate, $paymentId, $authCode, $concept, $price, $cardType, $cardNumber, $holderName, $receipt;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailBody)
    {
        $this->email = $mailBody["email"];
        $this->payDate = $mailBody["payDate"];
        $this->paymentId = $mailBody["paymentId"];
        $this->authCode = $mailBody["authCode"];
        $this->concept = $mailBody["concept"];
        $this->price = $mailBody["price"];
        $this->cardType = $mailBody["cardType"];
        $this->holderName = $mailBody["holderName"];
        $this->cardNumber = $mailBody["cardNumber"];
        $this->receipt = $mailBody["receipt"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Baby Passport - Recibo de Compra')
            ->to($this->email)
            ->attach($this->receipt)
            ->view('emails.receipt');
    }
}
