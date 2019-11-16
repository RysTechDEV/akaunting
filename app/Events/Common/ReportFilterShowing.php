<?php

namespace App\Events\Common;

use Illuminate\Queue\SerializesModels;

class ReportFilterShowing
{
    use SerializesModels;

    public $class;

    /**
     * Create a new event instance.
     *
     * @param $class
     */
    public function __construct($class)
    {
        $this->class = $class;
    }
}
