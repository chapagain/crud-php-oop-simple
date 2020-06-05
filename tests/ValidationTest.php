<?php

use Testspace\Validation;
use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
    /** @test */
    public function is_age_valid()
    {
        $this->assertTrue(Validation::is_age_valid(3));
    }

    /** @test */
    public function is_email_valid()
    {
        $this->assertTrue(Validation::is_email_valid('boubou@gmail.com'));
    }

    /** @test */
    public function check_empty()
    {
        $this->assertNull(Validation::check_empty([
            'name' => 'Pierre',
            'age' => '21',
            'email' => 'boubou@gmail.com',
        ], array('name', 'age', 'email')));
    }

    /** @test */
    public function miss_sth_to_check_empty()
    {
        $this->assertNotNull(Validation::check_empty([
            'name' => 'Pierre',
            'email' => 'boubou@gmail.com',
        ], array('name', 'age', 'email')));
    }
}