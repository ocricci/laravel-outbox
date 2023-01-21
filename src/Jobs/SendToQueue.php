<?php

namespace Ocricci\LaravelOutbox\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Ocricci\LaravelOutbox\Database\Reader;
use Ocricci\LaravelOutbox\Database\Writer;

class SendToQueue extends ShouldQueue
{
    public function handle()
    {
        foreach (Reader::read() as $message) {
            // Send to queue ( at least one queue )
            Queue::publish($message);
            Writer::delete($message);
        }
    }
}
