<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthedShellRenderTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_renders_with_brand_shell_and_avatar(): void
    {
        $user = User::factory()->create(['name' => 'Aria Vance', 'email' => 'aria@asatu.test']);

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertOk();
        $response->assertSee('Dashboard');
        $response->assertSee('dicebear');
        $response->assertSee('Aria Vance');
        $response->assertSee('Read the quickstart');
        $response->assertSee('Jump back in');
    }

    public function test_profile_renders_with_user_name(): void
    {
        $user = User::factory()->create(['name' => 'Aria Vance', 'email' => 'aria@asatu.test']);

        $response = $this->actingAs($user)->get('/profile');

        $response->assertOk();
        $response->assertSee('Aria Vance');
        $response->assertSee('Profile');
    }
}
