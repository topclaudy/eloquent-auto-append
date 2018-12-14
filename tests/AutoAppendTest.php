<?php

use Awobaz\AutoAppend\Database\Eloquent\Model;
use Awobaz\AutoAppend\Tests\Model\User;

require_once __DIR__. '/TestCase.php';

class AutoAppendTest extends TestCase
{
    /**
     * Test the save method on a relationship
     *
     * @return void
     */
    public function testAutoAppend()
    {
        Model::unguard();

        $user = new User();

        $user->firstname = "Claudin";
        $user->lastname = "Daniel";
        $user->job_title = "Developer";

        $this->assertArrayHasKey('fullname', $user->toArray());
        $this->assertArrayHasKey('description', $user->toArray());

        Model::unguard();
    }
}