<?php
/**
 * Playground
 */
namespace Playground\Admin\Resource\Http\Requests\User;

use Playground\Admin\Resource\Http\Requests\FormRequest;

/**
 * \Playground\Admin\Resource\Http\Requests\User\UnlockRequest
 */
class UnlockRequest extends FormRequest
{
    /**
     * @var array<string, string|array<mixed>>
     */
    public const RULES = [
        '_return_url' => ['nullable', 'url'],
    ];
}
