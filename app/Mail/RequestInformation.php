<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestInformation extends Mailable
{
    use Queueable, SerializesModels;
    public $fullName;
    public $header;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($informationRequested)
    {
        $this->fullName = $informationRequested['fullName'];
        $this->header = $informationRequested['header'];
        $this->message = $informationRequested['message'];        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.resquestInformation');
    }
}
