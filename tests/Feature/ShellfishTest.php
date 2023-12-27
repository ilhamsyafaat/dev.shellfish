<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShellfishTest extends TestCase
{
    use WithFaker; // Faker digunakan untuk mengisi data pada database secara otomatis
    // ROLE PELANGGAN/USER
    public function test_home()
    {
        $response = $this->get('/'); // Unit test home role pelanggan

        $response->assertStatus(200);
    }

    public function test_destinations()
    {
        $response = $this->get('/destination'); // Unit test destinations role pelanggan

        $response->assertSee('Detail');

        $response->assertStatus(200);
    }

    public function test_user_tidak_bisa_akses_dashboard()
    {
        $response = $this->get('/dashboard'); // Unit test ketika pelanggan tidak bisa akses dashboard

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_user_melakukan_booking() // Unit test ketika pelanggan booking 
    // Terjadi error dikarenakan pada database yang digunakan yaitu shellfish tidak ada id detination
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->post(route('store.booking'), [

                'firstname' => $this->faker->name(),
                'lastname' => $this->faker->name(),
                'start' => $this->faker->date(),
                'end' => $this->faker->date(),
                'participant' => $this->faker->randomNumber(3, true),
                'country' => 'Indonesia',
                'email' => $this->faker->freeEmail(),
                'phone' => $this->faker->e164PhoneNumber(),
                'message' => $this->faker->sentence(3),

            ]);

        $response->assertStatus(200);
    }
}
