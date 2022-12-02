<?php

namespace Biigle\Tests\Modules\DenbiService;

use Biigle\Modules\DenbiService\DenbiServiceServiceProvider;
use TestCase;

class DenbiServiceServiceProviderTest extends TestCase
{
    public function testServiceProvider()
    {
        $this->assertTrue(class_exists(DenbiServiceServiceProvider::class));
    }
}
