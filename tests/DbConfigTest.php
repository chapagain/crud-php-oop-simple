<?php

use Testspace\DbConfig;
use PHPUnit\Framework\TestCase;


class DbConfigTest extends TestCase
{
    /** @test */
    public function is_returning_a_connection() {
        $this->assertTrue(DbConfig::__construct());
    }
}