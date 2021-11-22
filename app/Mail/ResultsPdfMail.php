<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResultsPdfMail extends Mailable
{
    use Queueable, SerializesModels;
    private $mail;
    private $filename;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($mail, $filename)
    {
        $this->mail = $mail;
        $this->filename = $filename;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@lunglife.com')
            ->markdown('emails.resultMail')
            ->subject(__('results_subject'))
            ->attach(storage_path('app/public/' . $this->filename), [
                'as' => __('results_filename') . ".pdf",
                'mime' => 'application/pdf',
            ])
            ->to($this->mail);
    }
}
