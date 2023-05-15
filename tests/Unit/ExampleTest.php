<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Tests\CreatesApplication;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    use CreatesApplication;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $flag = true;
        $count = User::count();
        $this->assertTrue($flag);
    }
}
