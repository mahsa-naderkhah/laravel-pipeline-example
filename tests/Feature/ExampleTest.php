<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_models_can_be_found()
    {
        $user = User::factory()->state([
            'name' => 'Abigail Otwell',
        ])->create();

        $expecteddUser = User::find($user->id);
        $this->assertEquals($expecteddUser->name, $user->name);
    // Use model in tests...
    }
}
