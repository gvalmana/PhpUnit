<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testEmail(): void
    {
        $result = validate_email('user@mail.com');
        $this->assertTrue($result);
        $result = validate_email('user@@mail.com');
        $this->assertFalse($result);
    }
}
