<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $benhnhan;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($benhnhan)
    {
        
        $this->benhnhan=$benhnhan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    
    public function build()
    {
        return $this->from(config('mail.from'))
        ->subject('Thông báo đặt lịch khám')
        ->view('email.noidung', ['benhnhan' => $this->benhnhan]);
    }
}
