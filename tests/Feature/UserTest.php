<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
     /**
     * Testing the index function.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get(route('user.index'))
            ->assertOk();
    }
}
