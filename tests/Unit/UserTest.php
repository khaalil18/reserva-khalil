<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_user_is_admin(): void
    {
        $user = new User([
            'role' => 'Admin'
        ]);

        $this->assertTrue($user->isAdmin());
    }

    public function test_user_is_not_admin(): void
    {
        $user = new User([
            'role' => 'Guest'
        ]);

        $this->assertFalse($user->isAdmin());
    }
}