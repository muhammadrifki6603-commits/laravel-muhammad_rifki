<?php

namespace App\Listeners;

use App\Events\CheckoutCompleted;
use App\Jobs\GenerateInvoiceJob;
use App\Notifications\CheckoutSuccessNotification;
use Illuminate\Support\Facades\Log;

class ProcessCheckout
{
    public function handle(CheckoutCompleted $event)
    {
        $order = $event->order;

        // 1. log activity
        Log::info("Order berhasil dibuat: " . $order->id);

        // 2. dispatch job invoice
        GenerateInvoiceJob::dispatch($order);

        // 3. kirim notification
        $order->notify(new CheckoutSuccessNotification($order));
    }
}
