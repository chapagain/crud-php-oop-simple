<?php

use PHPUnit\Framework\TestCase;

include_once('../classes/Crud.php');

class CrudTest extends TestCase
{

    /** @test */
    public function is_getting_data()
    {
        $crud = new Crud();
        // If there is an error in the query
        $this->assertFalse($crud->getData("SELECT * FRODM users"));
        // If it is not a bool, it means that $row is defined.
        $this->assertIsNotBool($crud->getData("SELECT * FROM users"));
    }

    /**
     * Check if the function returned true when the query is executed
     * @test
     */
    public function is_executed() {
        $crud = new Crud();
        $this->assertFalse($crud->execute("SELECT * FRODM users"));
        $this->assertTrue($crud->execute("SELECT * FROM users"));
    }

    /** @test */
    public function is_deleted() {
        $crud = new Crud();
        $this->assertTrue($crud->delete(1, "users"));

        $this->assertFalse($crud->delete(88, "useer"));

        $this->assertFalse($crud->delete(1, "useer"));
    }

    /** @test */
    public function is_escaping_string() {
        $crud = new Crud();
        $this->assertNotEquals("fe,fek`{(\']>", $crud->escape_string("fe,fek`{(\']>"));
        $this->assertEquals("fe,fek`{(\']>", $crud->escape_string("fe,fek`{(']>"));
    }

}