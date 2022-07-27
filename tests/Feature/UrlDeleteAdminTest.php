<?php

namespace Tests\Feature;

use App\Models\Url;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlDeleteAdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_delete_url()
    {
        $user = User::factory()->create();
        $url = Url::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->actingAs($user)
            ->delete('/admin/dashboard/url/' .  $url);

        $response = $this->get('/admin/dashboard/urls');

        $response->assertStatus(200);
    }
}