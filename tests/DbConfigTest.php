<?php

use Testspace\DbConfig;
use PHPUnit\Framework\TestCase;


class DbConfigTest extends TestCase
{
    /** @test */
    public function object_created() {
        $db = new DbConfig();
        self::assertTrue($db instanceof DbConfig);
    }

    /** @test */
    public function bad_connection(){
        $db = new DbConfig();
        $db_co = $db->getConnection();
        $new_connection = $db_co->change_user('toto', '', 'test');
        self::assertFalse($new_connection);
    }


}