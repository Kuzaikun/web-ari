<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
       * The demo object instance.
       *
       * @var email
       */
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('sender@example.com')
                  ->view('mails.demo')
                  ->text('mails.demo_plain')
                  ->with(
                    [
                          'testVarOne' => '1',
                          'testVarTwo' => '2',
                    ]);
    }
}
