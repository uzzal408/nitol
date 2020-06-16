<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $cart;
    public $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cart,$info)
    {
        $this->cart = $cart;
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $cart = $this->cart;
        $info = $this->info;
        return $this->view('mail.confirm-order-mail',compact('cart','info'));
    }
}
