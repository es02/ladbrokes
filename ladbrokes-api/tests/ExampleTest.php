<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertNotNull(
            $this->response->getContent()
        );
    }

    public function testError()
    {
        $this->get('/race/squeak');

        $this->assertEquals(
            $this->response->getContent(), "{\"Error\":\"Race ID value must be an integer.\"}"
        );
    }


}
