<?php

namespace Bfg\Livewire;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Illuminate\Filesystem\Filesystem;
use Livewire\Commands\ComponentParser;

/**
 * Class ServiceProvider.
 * @package Bfg\Livewire
 */
class ServiceProvider extends IlluminateServiceProvider
{
    public function register()
    {
        $this->app->extend(\Livewire\LivewireComponentsFinder::class, function () {
            $defaultManifestPath = $this->app['livewire']->isRunningServerless()
                ? '/tmp/storage/bootstrap/cache/livewire-components.php'
                : app()->bootstrapPath('cache/livewire-components.php');

            return new LivewireComponentsFinder(
                new Filesystem,
                config('livewire.manifest_path') ?: $defaultManifestPath,
                ComponentParser::generatePathFromNamespace(
                    config('livewire.class_namespace')
                )
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../assets' => public_path('turbo-livewire')
        ], ['laravel-assets']);

        $this->loadViewsFrom(__DIR__ . '/../views', 'livewire');

        \Blade::directive('turbolinks', [$this, 'turbolinks']);
        \Blade::directive('turbolinksEval', [$this, 'turbolinksEval']);
        \Blade::directive('turbolinksPermanent', [$this, 'turbolinksPermanent']);
        \Blade::directive('turbolinksTrackReload', [$this, 'turbolinksTrackReload']);
        \Blade::directive('turbolinksActionReplace', [$this, 'turbolinksActionReplace']);
    }

    public function turbolinksEval($exp)
    {
        return turbolinks($exp)->eval();
    }

    public function turbolinksTrackReload($exp)
    {
        return turbolinks($exp)->trackReload();
    }

    public function turbolinksPermanent($exp)
    {
        return turbolinks($exp)->permanent();
    }

    public function turbolinksActionReplace($exp)
    {
        return turbolinks($exp)->actionReplace();
    }

    public function turbolinks($exp)
    {
        return turbolinks($exp);
    }
}
