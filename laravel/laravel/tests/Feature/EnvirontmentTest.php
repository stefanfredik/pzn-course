<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvirontmentTest extends TestCase {
    function testGetEnv() {
        $youtube = env("Youtube");
        self::assertEquals("Kopi Flores", $youtube);
    }
}
