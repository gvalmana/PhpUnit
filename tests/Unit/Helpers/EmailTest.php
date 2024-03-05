<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    public function testEmail(): void
    {
        $result = Email::validate('user@example.com');
        $this->assertTrue($result);
        $result = Email::validate('user@@example.com');
        $this->assertFalse($result);
    }
}
