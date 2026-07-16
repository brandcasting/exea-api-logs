<?php

namespace Tests\Feature;

use App\Modules\Users\Models\Usuario;
use App\Modules\Users\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_duplicate_email_is_rejected(): void
    {
        $this->postJson('/api/users', [
            'name' => 'Juan',
            'email' => 'juan@example.com',
            'phone' => '5551234',
        ])->assertCreated();

        $this->postJson('/api/users', [
            'name' => 'Ana',
            'email' => 'juan@example.com',
            'phone' => '5559999',
        ])->assertStatus(422)
            ->assertJsonValidationErrors(['email']);
    }

    public function test_service_detects_if_email_exists(): void
    {
        Usuario::create([
            'name' => 'Juan',
            'email' => 'juan@example.com',
            'phone' => '5551234',
        ]);

        $service = new UserService();

        $this->assertFalse($service->emailExists('nuevo@example.com'));
        $this->assertTrue($service->emailExists('juan@example.com'));
    }

    public function test_get_endpoint_returns_user_info_when_email_exists(): void
    {
        Usuario::create([
            'name' => 'Juan',
            'email' => 'juan@example.com',
            'phone' => '5551234',
        ]);

        $this->getJson('/api/users/check?email=juan@example.com')
            ->assertOk()
            ->assertJsonPath('exists', true)
            ->assertJsonPath('data.email', 'juan@example.com');
    }
}
