<?php

namespace Bfg\Livewire;

use Livewire\Component;
use Livewire\LivewireComponentsFinder as OriginalLivewireComponentsFinder;
use function Livewire\str;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Class LivewireComponentsFinder.
 * @package Bfg\Livewire
 */
class LivewireComponentsFinder extends OriginalLivewireComponentsFinder
{
    /**
     * @var array
     */
    protected static $paths = [];

    /**
     * @param  string  $namespace
     * @param  string  $path
     */
    public static function directory(string $namespace, string $path)
    {
        static::$paths[$namespace] = $path;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getClassNames()
    {
        $result = parent::getClassNames();

        foreach (static::$paths as $namespace => $path) {
            if (is_dir($path)) {
                $result_to_merge = collect($this->files->allFiles($path))
                    ->map(function (SplFileInfo $file) use ($namespace, $path) {
                        return $namespace.'\\'.str($file->getPathname())
                                ->after($path.'/')
                                ->replace(['/', '.php'], ['\\', ''])->__toString();
                    })
                    ->filter(function (string $class) {
                        return is_subclass_of($class, Component::class) &&
                            ! (new \ReflectionClass($class))->isAbstract();
                    });

                $result = $result->merge($result_to_merge);
            }
        }

        return $result;
    }
}
