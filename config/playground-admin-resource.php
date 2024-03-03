<?php

return [
    'middleware' => [
        'default' => env('PLAYGROUND_ADMIN_RESOURCE_MIDDLEWARE_DEFAULT', ['web']),
        'auth' => env('PLAYGROUND_ADMIN_RESOURCE_MIDDLEWARE_AUTH', ['web', 'auth']),
        'guest' => env('PLAYGROUND_ADMIN_RESOURCE_MIDDLEWARE_GUEST', ['web']),
    ],
    'policies' => [
        Playground\Admin\Models\Setting::class => Playground\Admin\Resource\Policies\SettingPolicy::class,
    ],
    'load' => [
        'policies' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_LOAD_POLICIES', true),
        'routes' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_LOAD_ROUTES', true),
        'translations' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_LOAD_TRANSLATIONS', true),
        'views' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_LOAD_VIEWS', true),
    ],
    'routes' => [
        'admin' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_ROUTES_ADMIN', true),
        'settings' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_ROUTES_SETTINGS', true),
        'users' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_ROUTES_USERS', true),
    ],
    'users' => [
        'lockable' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_USERS_LOCKABLE', true),
        'trashable' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_USERS_TRASHABLE', true),
        'rules' => env('PLAYGROUND_ADMIN_RESOURCE_USERS_RULES', 'playground'),
        // 'rules' => env('PLAYGROUND_ADMIN_RESOURCE_USERS_RULES', 'laravel'),
        // TODO setting the table could be dynamic
        'table' => env('PLAYGROUND_ADMIN_RESOURCE_USERS_TABLE', 'users'),
    ],
    'sitemap' => [
        'enable' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_SITEMAP_ENABLE', true),
        'guest' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_SITEMAP_GUEST', true),
        'user' => (bool) env('PLAYGROUND_ADMIN_RESOURCE_SITEMAP_USER', true),
        'view' => env('PLAYGROUND_ADMIN_RESOURCE_SITEMAP_VIEW', 'playground-admin-resource::sitemap'),
    ],
    'blade' => env('PLAYGROUND_ADMIN_RESOURCE_BLADE', 'playground-admin-resource::'),

    'abilities' => [
        'admin' => [
            'playground-admin-resource:*',
        ],
        'manager' => [
            'playground-admin-resource:user:*',
            'playground-admin-resource:setting:*',
        ],
        'user' => [
            'playground-admin-resource:user:view',
            'playground-admin-resource:user:viewAny',
            'playground-admin-resource:setting:view',
            'playground-admin-resource:setting:viewAny',
        ],
        // 'guest' => [
        //     'deny',
        // ],
        // 'guest' => [
        //     'app:view',

        //     'playground:view',

        //     'playground-auth:logout',
        //     'playground-auth:reset-password',

        //     'playground-admin-resource:user:view',
        //     'playground-admin-resource:user:viewAny',
        //     'playground-admin-resource:setting:view',
        //     'playground-admin-resource:setting:viewAny',
        // ],
    ],
];
