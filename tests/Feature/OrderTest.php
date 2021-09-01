<?php

namespace Tests\Feature;

use App\Models\Service;
use Tests\TestCase;

class OrderTest extends TestCase
{
    private $service;

    protected function setUp(): void
    {
        parent::setUp();

        $this->service = Service::factory()->create();
    }

    /**
     * Testing the create function.
     *
     * @return void
     */
    public function testCreate()
    {
        $this->get(route('order.create', $this->service))
            ->assertOk();
    }
}
