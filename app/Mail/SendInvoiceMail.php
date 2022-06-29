<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $invoice;
    protected $document;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoice, $document)
    {
        $this->invoice = $invoice;
        $this->document = $document;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Facture Auberge SILVER')
                    ->view('mail.orders.invoice')
                    ->with([
                        'invoice' => $this->invoice,
                        'document' => $this->document
                    ]);
    }
}
