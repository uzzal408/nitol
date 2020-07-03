<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderDetails extends Mailable
{
    use Queueable, SerializesModels;
    protected $carts;
    protected $info;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($carts,$info)
    {
        $this->carts = $carts;
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $carts = $this->carts;
        $info = $this->info;
        return $this->from('estore@nitolelectronics.com')->subject('Order Complete')->view('mail.client-order-detail-mail',compact('carts','info'));
    }
}
