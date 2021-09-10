<?php

namespace Tests\Feature;

use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /**
     * Testing the show function
     *
     * @return void
     */
    public function testShow(): void
    {
        $this->get(route('welcome.show'))
            ->assertOk();
    }
}
