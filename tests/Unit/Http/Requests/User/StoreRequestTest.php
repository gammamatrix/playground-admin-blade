<?php
/**
 * Playground
 *
 */

namespace Tests\Unit\Playground\Admin\Resource\Http\Requests\User;

use Playground\Admin\Resource\Http\Requests\User\StoreRequest;
use Playground\Test\MockingTrait;
use Tests\Unit\Playground\Admin\Resource\Http\Requests\RequestTestCase;

/**
 * \Tests\Unit\Playground\Admin\Resource\Http\Requests\User\StoreRequestTest
 *
 */
class StoreRequestTest extends RequestTestCase
{
    use MockingTrait;

    protected string $requestClass = StoreRequest::class;

    public function test_return_playground_rules(): void
    {
        $instance = new StoreRequest;

        $rules = $instance->rules();

        $this->assertIsArray($rules);

        $keys = [
            'user_type',
            'banned_at',
            'suspended_at',
            'gids',
            'po',
            'pg',
            'pw',
            'status',
            'rank',
            'size',
            'active',
            'banned',
            'flagged',
            'internal',
            'locked',
            'problem',
            'suspended',
            'unknown',
            'name',
            'email',
            'address',
            'password',
            'phone',
            'locale',
            'timezone',
            'label',
            'title',
            'byline',
            'slug',
            'url',
            'description',
            'introduction',
            'content',
            'summary',
            'icon',
            'image',
            'avatar',
            'ui',
            'abilities',
            'meta',
            'options',
            'sources',
            '_return_url',
        ];

        foreach ($keys as $key) {
            $this->assertArrayHasKey($key, $rules);
        }

        $this->assertCount(count($keys), $rules);
    }

    public function test_return_laravel_rules(): void
    {
        config([
            'playground-admin-resource.users.rules' => 'laravel',
        ]);
        $instance = new StoreRequest;

        $rules = $instance->rules();

        $this->assertIsArray($rules);

        $keys = [
            'name',
            'email',
            '_return_url',
        ];

        foreach ($keys as $key) {
            $this->assertArrayHasKey($key, $rules);
        }

        $this->assertCount(count($keys), $rules);
    }

    public function test_prepareForValidation_for_laravel(): void
    {
        config([
            'playground-admin-resource.users.rules' => 'laravel',
        ]);
        $instance = new StoreRequest;

        $this->assertEmpty($this->invokeProtected($instance, 'prepareForValidation'));
    }

    public function test_prepareForValidation_for_playground(): void
    {
        config([
            'playground-admin-resource.users.rules' => 'playground',
        ]);
        $instance = new StoreRequest;

        $this->assertEmpty($this->invokeProtected($instance, 'prepareForValidation'));
    }

    public function test_prepareForValidation_parameters(): void
    {
        $request = $this->mockRequest(StoreRequest::class, 'PATCH', '/testing', [
            'title' => 'Captain',
            'label' => 'Hero',
            'phone' => '555-123-4567',
            'timezone' => 'UTC',
        ]);
        config([
            'playground-admin-resource.users.rules' => 'playground',
        ]);

        $this->assertEmpty($this->invokeProtected($request, 'prepareForValidation'));

        $input = $request->input();
        $this->assertArrayHasKey('title', $input);
        $this->assertSame('Captain', $input['title']);
        $this->assertArrayHasKey('label', $input);
        $this->assertSame('Hero', $input['label']);
        // Dashes will get stripped
        $this->assertArrayHasKey('phone', $input);
        $this->assertSame('5551234567', $input['phone']);
        $this->assertArrayHasKey('timezone', $input);
        $this->assertSame('UTC', $input['timezone']);
    }
}
