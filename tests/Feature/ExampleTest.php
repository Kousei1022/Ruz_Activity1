<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_login_when_trying_to_access_products(): void
    {
        $this->get('/products')->assertRedirect('/login');
    }

    public function test_authenticated_user_can_create_a_product(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/products', [
            'name' => 'Keyboard',
            'description' => 'Mechanical keyboard',
            'price' => '59.99',
            'quantity' => 10,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', [
            'user_id' => $user->id,
            'name' => 'Keyboard',
        ]);
    }

    public function test_user_cannot_edit_another_users_product(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $product = Product::factory()->create([
            'user_id' => $owner->id,
        ]);

        $this->actingAs($otherUser)
            ->get('/products/' . $product->id . '/edit')
            ->assertForbidden();
    }
}
