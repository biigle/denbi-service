<?php

namespace Biigle\Tests\Modules\DenbiService;

use Biigle\Modules\DenbiService\ModuleServiceProvider;
use TestCase;

class ModuleServiceProviderTest extends TestCase
{
    public function testServiceProvider()
    {
        $this->assertTrue(class_exists(ModuleServiceProvider::class));
    }
}
