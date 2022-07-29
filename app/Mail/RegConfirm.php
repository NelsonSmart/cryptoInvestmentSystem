<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\site_settings;

class RegConfirm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($maildata)
    {
        $this->maildata = $maildata ;
        $this->st = site_settings::find(1);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('User Account Activation')
                    ->from(env('MAIL_USERNAME'), $this->st->site_title)
                    ->view('mail.regconfirm', ['md' => $this->maildata])
                    ->to($this->maildata['email']);
    }
}
