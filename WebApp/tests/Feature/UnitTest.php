<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_view_login()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}