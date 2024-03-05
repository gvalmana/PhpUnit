<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function testUser()
    {
        $user = User::factory()->create([
            'email' => 'user@example.com'
        ]);
        $this->assertDatabaseHas('users',  [
            'email' => 'user@example.com'
        ]);

        $user->delete();

        $this->assertDatabaseMissing('users',  [
            'email' => 'user@example.com'
        ]);
    }
}
