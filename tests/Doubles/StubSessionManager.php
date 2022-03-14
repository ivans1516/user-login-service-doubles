<?php

namespace UserLoginService\Tests\Doubles;

use UserLoginService\Application\SessionManager;

class StubSessionManager implements SessionManager
{
    public function getSessions(): int
    {
        return 10;
    }

    public function login(string $userName, string $password): bool
    {
    }

    public function logout(string $getUserName): string
    {
        // TODO: Implement logout() method.
    }

    public function secureLogin(string $getUserName)
    {
        // TODO: Implement secureLogin() method.
    }
}