<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    public $from_mail;
    public $from_name;
    public $name;

    public function __construct($mailData, $from_mail, $from_name, $name)
    {
        $this->mailData = $mailData;
        $this->from_mail = $from_mail;
        $this->from_name = $from_name;
        $this->name = $name;
    }

    public function build()
    {
        return $this->from($this->from_mail, $this->from_name)
            ->subject('Website TB-TK - Pertanyaan dari ' . $this->name)
            ->view('contact-mail');
    }
}
