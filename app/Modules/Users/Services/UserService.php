<?php

namespace App\Modules\Users\Services;

use App\Modules\Users\Models\Usuario;

class UserService
{
    public function emailExists(string $email): bool
    {
        return $this->getUserByEmail($email) !== null;
    }

    public function getUserByEmail(string $email): ?Usuario
    {
        return Usuario::where('email', strtolower(trim($email)))->first();
    }
}