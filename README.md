# Extension livewire

Extension for the [`Livewire`](https://laravel-livewire.com/) package. 
Adds fidder for components and extend with [alpine](https://alpinejs.dev/) and [turbolink](https://laravel-livewire.com/).

## Usage



For inject folder you can do this:
```php
Bfg\Livewire\LivewireComponentsFinder::directory('Admin\\Pages', __DIR__.'/../Pages');
```
```php
LivewireComponentsFinder::directory(string $namespace, string $path);
```
