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
    use WithFaker;
    //booking test
    public function test_view_booking() //perbaiki
    {
        $user = User::factory()->create();
        $this->assertNotEmpty($user->name);
    }

    //city
    public function test_add_city()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('store-city'), [
            //parameter
            'city' => 'Bali'
        ]);

        $this->assertDatabaseHas('city', [
            'city' => 'Bali'
        ]);
        
        $response->assertStatus(302);
        $response->assertRedirect()->withSuccess('Data successfully added');
    }

    
}
