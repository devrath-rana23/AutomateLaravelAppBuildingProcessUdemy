<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class FancyEvent
{
    use SerializesModels;

    public $employee;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($employee)
    {
        $this->employee = $employee;
    }
}
