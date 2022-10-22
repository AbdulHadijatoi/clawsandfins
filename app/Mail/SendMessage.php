<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$email,$subject,$description;
    public function __construct($name,$email,$subject,$description)
    {
        $this->name = $name;
        $this->email= $email;
        $this->subject= $subject;
        $this->description= $description;
    }

    public function build()
    {
        $address = config("mail.from.address");
        $this->subject($this->subject)->view('mail.contact-us');
        return $this;
    }
}
