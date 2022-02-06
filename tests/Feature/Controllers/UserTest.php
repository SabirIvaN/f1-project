<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');
    }

    /**
     * Testing the index function.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get(route('user.index'))->assertOk();
    }
}
