<?php

namespace Modules\Demo\Tests\Feature;

use Tests\TestCase;

class DemoTest extends TestCase
{
    public function testCanLoadDemo()
    {
        $this->get('demo')->assertOk();
    }
}
