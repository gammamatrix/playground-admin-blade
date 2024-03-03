<?php
/**
 * Playground
 *
 */

namespace Tests\Unit\Playground\Admin\Resource;

use Playground\ServiceProvider as PlaygroundServiceProvider;
use Playground\Auth\ServiceProvider as PlaygroundAuthServiceProvider;
use Playground\Blade\ServiceProvider as PlaygroundBladeServiceProvider;
use Playground\Http\ServiceProvider as PlaygroundHttpServiceProvider;
use Playground\Admin\ServiceProvider as PlaygroundAdminServiceProvider;
use Playground\Login\Blade\ServiceProvider as PlaygroundLoginBladeServiceProvider;
use Playground\Site\Blade\ServiceProvider as PlaygroundSiteBladeServiceProvider;
use Playground\Admin\Resource\ServiceProvider;

/**
 * \Tests\Unit\Playground\Admin\Resource\TestTrait
 *
 */
trait TestTrait
{
    protected function getPackageProviders($app)
    {
        return [
            PlaygroundAuthServiceProvider::class,
            PlaygroundBladeServiceProvider::class,
            PlaygroundHttpServiceProvider::class,
            PlaygroundLoginBladeServiceProvider::class,
            PlaygroundSiteBladeServiceProvider::class,
            PlaygroundAdminServiceProvider::class,
            PlaygroundServiceProvider::class,
            ServiceProvider::class,
        ];
    }
}
