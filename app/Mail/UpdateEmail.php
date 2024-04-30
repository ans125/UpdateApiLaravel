<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UpdateEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $updateMessage;

    /**
     * Create a new message instance.
     *
     * @param string $updateMessage The message to include in the email body
     */
    public function __construct($updateMessage)
    {
        $this->updateMessage = $updateMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.update')
                    ->subject('Update Successful');
    }
}