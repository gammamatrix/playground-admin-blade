<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Tests\Feature\Playground\Admin\Resource\Http\Controllers\Playground;

use Playground\Models\User;
use Tests\Feature\Playground\Admin\Resource\TestCase;

/**
 * \Tests\Feature\Playground\Admin\Resource\Http\Controllers\Playground\IndexRouteTest
 */
class IndexRouteTest extends TestCase
{
    protected bool $setUpUserForPlayground = true;

    public function test_guest_cannot_render_index_view(): void
    {
        $url = route('playground.admin.resource');

        $response = $this->get($url);

        $response->assertStatus(403);
    }

    public function test_admin_can_render_index_view(): void
    {
        /**
         * @var User $user
         */
        $user = User::factory()->admin()->create();

        $url = route('playground.admin.resource');

        $response = $this->actingAs($user)->get($url);

        $response->assertStatus(200);

        $this->assertAuthenticated();
    }
}