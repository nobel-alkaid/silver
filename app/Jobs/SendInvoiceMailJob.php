<?php

namespace App\Jobs;

use App\Models\Invoice;
use App\Mail\SendInvoiceMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendInvoiceMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $invoice;
    public $document;
    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(Invoice $invoice, $document)
    {
        $this->invoice = $invoice;
        $this->document = $document;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        Mail::to($this->invoice->sejour->client->email)->send(new SendInvoiceMail($this->invoice, $this->document));
    }
}
