<?php

namespace App; 

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Weblee\Mandrill\Mail;
class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->req = $request;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Mail $mandrill)
    {
        $data = $this->req;
        return $this->from('insight@data-driven.asia')->text($data['message']);
    }
}
