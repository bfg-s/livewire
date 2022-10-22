<?php

use Bfg\Livewire\Turbolinks;
use JetBrains\PhpStorm\Pure;

if (! function_exists('turbolinks')) {
    /**
     * @param mixed $value
     * @return Turbolinks
     */
    #[Pure] function turbolinks (mixed $value = ""): Turbolinks
    {
        return new Turbolinks($value);
    }
}
