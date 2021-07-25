<?php

namespace Bfg\Livewire;

use Bfg\Installer\Providers\InstalledProvider;
use Illuminate\Filesystem\Filesystem;
use Livewire\Commands\ComponentParser;
use Livewire\LivewireComponentsFinder;

/**
 * Class ServiceProvider
 * @package Bfg\Livewire
 */
class ServiceProvider extends InstalledProvider
{
    /**
     * The description of extension.
     * @var string|null
     */
    public ?string $description = "Finder for the Livewire";

    /**
     * Set as installed by default.
     * @var bool
     */
    public bool $installed = true;

    /**
     * Executed when the provider is registered
     * and the extension is installed.
     * @return void
     */
    public function installed(): void
    {
        $this->app->extend(LivewireComponentsFinder::class, function () {

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

    /**
     * Executed when the provider run method
     * "boot" and the extension is installed.
     * @return void
     */
    public function run(): void
    {
        //
    }
}

