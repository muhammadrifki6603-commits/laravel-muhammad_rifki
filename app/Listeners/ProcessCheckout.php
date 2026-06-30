<?php

namespace App\Listeners;

use App\Events\CheckoutCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProcessCheckout
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CheckoutCompleted $event): void
    {
        //
    }
}
