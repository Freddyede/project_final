<?php

namespace App\Tests;

use App\Services\micro_services\StrReplaceMicroServices;
use PHPUnit\Framework\TestCase;

class StrReplaceMicroServiceTest extends TestCase {

    public function testReplace() {
        $strMicroServices = new StrReplaceMicroServices();
        $this->assertEquals(
            'Hello PHP',
            $strMicroServices->strReplace('Hello World', 'World', 'PHP')
        );
    }
}
