<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    // use RefreshDatabase;
    // Unit test admin
    public function test_add_city(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->get(route('store-city'), [

                'city' => 'Bwi'
            ]);

        // $this->assertResponseOk();
        $response->assertStatus(200);
    }
}
