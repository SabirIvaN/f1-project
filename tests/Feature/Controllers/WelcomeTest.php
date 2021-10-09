<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;

class WelcomeTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');
    }

    /**
     * Testing the show function
     *
     * @return void
     */
    public function testShow(): void
    {
        $this
            ->get(route('welcome.show'))
            ->assertOk();
    }
}
