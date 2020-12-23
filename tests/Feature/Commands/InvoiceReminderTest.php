<?php

namespace Tests\Feature\Commands;

use App\Jobs\Document\CreateDocument;
use App\Models\Document\Document;
use App\Notifications\Sale\Invoice as InvoiceNotification;
use App\Utilities\Date;
use Illuminate\Support\Facades\Notification;
use Tests\Feature\FeatureTestCase;

class InvoiceReminderTest extends FeatureTestCase
{
    public $add_days;

    protected function setUp(): void
    {
        parent::setUp();

        $this->add_days = 3;
    }

    public function testInvoiceReminderByDueDate()
    {
        Notification::fake();

        $invoice = $this->dispatch(new CreateDocument($this->getRequest()));

        Date::setTestNow(Date::now()->addDay($this->add_days));

        $this->artisan('reminder:invoice');

        Notification::assertSentTo(
            $this->user,
            InvoiceNotification::class,
            function ($notification, $channels) use ($invoice) {
                return $notification->invoice->id === $invoice->id;
            }
        );
    }

    public function getRequest()
    {
        return Document::factory()->invoice()->items()->sent()->raw([
            'due_at' => Date::now()->subDays($this->add_days - 1),
        ]);
    }
}
