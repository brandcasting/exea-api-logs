<?php

namespace App\Modules\Users\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Users\Models\Usuario;
use App\Modules\Users\Requests\StoreUserRequest;
use App\Modules\Users\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function __construct(private readonly UserService $userService)
    {
    }

    public function store(StoreUserRequest $request)
    {
        $email = strtolower(trim($request->input('email')));

        if ($this->userService->emailExists($email)) {
            throw ValidationException::withMessages([
                'email' => ['El correo ya está registrado.'],
            ]);
        }

        $user = Usuario::create([
            'name' => $request->input('name'),
            'email' => $email,
            'phone' => $request->input('phone'),
        ]);

        return response()->json([
            'message' => 'Usuario creado correctamente.',
            'data' => $user,
        ], 201);
    }

    public function check(Request $request)
    {
        $email = strtolower(trim($request->query('email', '')));

        if ($email === '') {
            return response()->json([
                'exists' => false,
                'message' => 'El correo es requerido.',
                'data' => null,
            ], 422);
        }

        $user = $this->userService->getUserByEmail($email);

        return response()->json([
            'exists' => $user !== null,
            'data' => $user,
        ]);
    }
}
