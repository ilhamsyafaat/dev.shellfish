<?php

namespace Tests\Feature;

use App\Models\City;
use App\Models\Transportation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    protected $user;
    use WithFaker;

    public function test_dashboard(): void
    {
        $this->withoutExceptionHandling();
        $user = User::find(1);

        $response = $this
            ->actingAs($user)
            ->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_destinations(): void
    {
        $this->withoutExceptionHandling();
        $user = User::find(1);

        $response = $this
            ->actingAs($user)
            ->get(route('view-destination'), [
                'destination_name' => 'Ubud Rice Terrace'
            ]);

        $this->assertDatabaseHas('destination', [
            'destination_name' => 'Ubud Rice Terrace'
        ]);

        $response->assertStatus(200);
    }

    public function test_booking(): void
    {
        $this->withoutExceptionHandling();
        $user = User::find(1);

        $response = $this
            ->actingAs($user)
            ->get(route('view.booking'), [
                'firstname' => 'Ubud Rice Terrace'
            ]);

        $this->assertDatabaseHas('booking', [
            'firstname' => 'Ilham'
        ]);

        $response->assertStatus(200);
    }

    public function test_add_city()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('store-city'), [
            'city' => 'Bali'
        ]);

        $this->assertDatabaseHas('city', [
            'city' => 'Bali'
        ]);

        $response->assertStatus(302);
        $response->assertRedirect()->withSuccess('Data successfully added');
    }

    public function test_add_transportasi()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('store-transportation'), [
            'name_transportation' => 'Ertiga',
            'picture_transportation' => 'picture_transportation/43SZnEFG4TcuWigUiYgHZ2RR9xgbumiMY4vUIvgw.jpg',
            'price' => '85',
            'details_description' => 'Driver ; Capacity 6 seats ; Parking free ; Duration 12 hours',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect()->withSuccess('Data successfully added');
    }
    
    // public function test_delete_transportation()
    // {
    //     $user = User::factory()->create();
    //     $data = Transportation::factory()->create();
    //     $response = $this->actingAs($user)->delete(route('destroy-transportation'), [
    //         'id' => $data->id,
    //     ]);
        
    //     $this->assertDatabaseHas('transportation', ['id' => $data->id]);
    //     $response->assertRedirect(route('list-transportation'));
    // }
    
    // public function test_update_transportasi()
    // {
    //     $user = User::factory()->create();
    //     $data = Transportation::factory();

    //     $response = $this->actingAs($user)->post('/update-transportation'. $data->id, [
    //         'name_transportation' => 'BMW',
    //         'picture_transportation' => 'picture_transportation/43SZnEFG4TcuWigUiYgHZ2RR9xgbumiMY4vUIvgw.jpg',
    //         'price' => '90',
    //         'details_description' => 'Driver ; Capacity 2 seats ; Parking free ; Duration 12 hours',
    //     ]);

    //     $response->assertStatus(200);
    // $response->assertRedirect('list-transportation');
    // }

    // public function test_delete_city()
    // {
    //     $user = User::factory()->create();
    //     $response = $this->actingAs($user)->get(route('destroy-transportation'), [
    //         'city' => 'Bali'
    //     ]);

    //     $this->assertDatabaseHas('city', [
    //         'city' => 'Bali'
    //     ]);

    //     // $response->assertStatus(302);
    //     $response->assertTrue(true);
    // }


}
